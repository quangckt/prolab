<?php
require 'protected/modules/reporting/components/database_mysql.php';
require 'protected/modules/reporting/components/localization.php';
require 'protected/modules/reporting/components/database_xml.php';
require 'protected/modules/reporting/components/handler.php';


class ReportController extends BaseController
{
    
       
	
	//public $layout='//layouts/empty';
   	//public $layout='//layouts/column2';
    
    //public $layout = Yii::app()->getModule('reporting')->layout;
    
    public $filterData=""; 
    
    public function beforeAction($action)
	{
		$this->layout = Yii::app()->getModule('reporting')->layout;
		return true;
	}
    
    
	public function actionIndex()
	{
    	$report_key = sti_get_parameter_value("stimulsoft_report_key");
    	$client_key = sti_get_parameter_value("stimulsoft_client_key");
        $enable_compression = true;
        
       
	$client_data = null;
	if (isset($HTTP_RAW_POST_DATA)) $client_data = $HTTP_RAW_POST_DATA;
	if ($client_data == null) $client_data = file_get_contents("php://input");
    

    // Processing client Flash application commands
	if (isset($client_key))
	{

		if (!function_exists("gzuncompress")) $enable_compression = false;
		
		if ($enable_compression && strlen($client_data) > 0)
		{
			$client_data = base64_decode($client_data);
  			$client_data = gzuncompress($client_data);
		}
        
		$response = $this->sti_client_event_handler($client_key, $report_key, $client_data, $enable_compression);
        
		if ($enable_compression && strlen($response) > 0 && $client_key != "ViewerFx" && $client_key != "DesignerFx")
		{
			$response = gzcompress($response);
			$response = base64_encode($response);
		}
		
		echo $response;
	}
   
  }



	function sti_client_event_handler($client_key, $report_key, $client_data, $enable_compression)
	{
		switch ($client_key)
		{
			// Loading ViewerFx
			case "ViewerFx":
				if (!isset($report_key)) $report_key = "null";
				//$content = file_get_contents("viewer.html");
               // var_dump(sti_get_parameters($enable_compression));
                $this->render('viewer',array('MARKER_REPORT_PARAMS'=> sti_get_parameters($enable_compression))); 
				break;
			
			// Loading DesignerFx
			case "DesignerFx":
              
				if (!isset($report_key)) $report_key = "null";
				//$content = file_get_contents("designer.html");
				//return str_replace("#MARKER_REPORT_PARAMS#", sti_get_parameters($enable_compression), $content);
                $this->render('designer',array('MARKER_REPORT_PARAMS'=> sti_get_parameters($enable_compression))); 
                //return $content;                
				break;
			
			// Loading configuration
			case "LoadConfiguration":
				//return sti_load_config("config.xml");
                return sti_load_config(Yii::app()->basePath . "/modules/reporting/Config/config.xml");
				break;
			
			// Loading a report when running the viewer or designer
 			case "LoadReport":
				echo sti_get_report($client_data);
				break;
			
			// Loading a report by the specified URL
			// Used for debug. Does not work in the released version
			case "LoadReportFile":
				return file_get_contents($client_data);
				break;
			
			// Loading the requested localization file
			case "LoadLanguage":
                 //var_dump($localization_directory."/".$client_data);
				//$localization_directory = sti_get_localization_directory();
				//return sti_load_localization_file($localization_directory."/".$client_data);
                $localization_directory =sti_get_localization_directory();
				$this->render('SendDirectToClient',array('SendDirectToClient'=> file_get_contents($localization_directory."/".$client_data)));
				break;
			
			// Saving a report
			case "SaveReport":
				$report = base64_decode(sti_get_xml_value($client_data, "Report"));
				$report_key = sti_get_xml_value($client_data, "ReportKey");
				$new_report_flag = sti_get_xml_value($client_data, "NewReportFlag");
				return sti_save_report($report, $report_key, $new_report_flag);
				break;
			
			// Test database connection
			case "TestConnection":
				$connection_type = sti_get_xml_value($client_data, "ConnectionType");
				$connection_string = sti_create_connection_string($client_data);
				
				switch ($connection_type)
				{
					case "StiSqlDatabase": return sti_mssql_test_connection($connection_string);
					case "StiMySqlDatabase": return sti_mysql_test_connection($connection_string);
					case "StiOdbcDatabase": return sti_odbc_test_connection($connection_string);
					case "StiPostgreSQLDatabase": return sti_pg_test_connection($connection_string);
					case "StiOracleDatabase": return sti_oracle_test_connection($connection_string);
					case "StiFirebirdDatabase": return sti_firebird_test_connection($connection_string);
					
					default: return "";
				}
				break;
			
			// Retrieve table columns query
			case "RetrieveColumns":
				$connection_type = sti_get_xml_value($client_data, "ConnectionType");
				$data_path = sti_get_xml_value($client_data, "DataPath");
				$schema_path = sti_get_xml_value($client_data, "SchemaPath");
				$connection_string = sti_create_connection_string($client_data);
				$query = sti_get_xml_value($client_data, "Query");
				$query = base64_decode($query);
				
				switch ($connection_type)
				{
					case "StiXmlDatabase": return sti_xml_get_columns($data_path, $schema_path);
					case "StiSqlDatabase": return sti_mssql_get_columns($connection_string, $query);
					case "StiMySqlDatabase": return sti_mysql_get_columns($connection_string, $query);
					case "StiOdbcDatabase": return sti_odbc_get_columns($connection_string, $query);
					case "StiPostgreSQLDatabase": return sti_pg_get_columns($connection_string, $query);
					case "StiOracleDatabase": return sti_oracle_get_columns($connection_string, $query);
					case "StiFirebirdDatabase": return sti_firebird_get_columns($connection_string, $query);
					
					default: return "";
				}
				break;
			
			// Data query
			// Response to the client - data in the xml format
			case "LoadData":
				$connection_type = sti_get_xml_value($client_data, "ConnectionType");
				$data_path = sti_get_xml_value($client_data, "DataPath");
				$schema_path = sti_get_xml_value($client_data, "SchemaPath");
				$connection_string = sti_create_connection_string($client_data);
				$data_source_name = sti_get_xml_value($client_data, "DataSourceName");
				$query = sti_get_xml_value($client_data, "Query");
				$query = base64_decode($query);
				
				switch ($connection_type)
				{
					case "StiXmlDatabase": return sti_xml_get_data($data_path, $schema_path);
					case "StiSqlDatabase": return sti_mssql_get_data($connection_string, $data_source_name, $query);
					case "StiMySqlDatabase": return sti_mysql_get_data($connection_string, $data_source_name, $query);
					case "StiOdbcDatabase": return sti_odbc_get_data($connection_string, $data_source_name, $query);
					case "StiPostgreSQLDatabase": return sti_pg_get_data($connection_string, $data_source_name, $query);
					case "StiOracleDatabase": return sti_oracle_get_data($connection_string, $data_source_name, $query);
					case "StiFirebirdDatabase": return sti_firebird_get_data($connection_string, $data_source_name, $query);
					
					default: return "";
				}
				break;
			
			// Exported report
			case "ExportReport":
				$format = sti_get_xml_value($client_data, "Format");
				$report_key = sti_get_xml_value($client_data, "ReportKey");
				$file_name = sti_get_xml_value($client_data, "FileName");
				$data = base64_decode(sti_get_xml_value($client_data, "Data"));
				return sti_export_report($format, $report_key, $file_name, $data);
				break;
		}
	}	

	
}
?>