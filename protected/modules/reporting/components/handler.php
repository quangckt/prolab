<?php

	function sti_get_xml_value($value, $key)
	{
		if (strpos($value, "<".$key.">") < 0 || strpos($value, "</".$key.">") < 0) return null;
		return substr(substr($value, 0, strpos($value, "</".$key.">")), strpos($value, "<".$key.">") + strlen($key) + 2);
	}
	
	function sti_strip($value)
	{
		if (get_magic_quotes_gpc() != 0)
		{
			if (is_array($value))
			{
				if (sti_array_is_associative($value))
				{
					foreach ($value as $k=>$v)
					{
						$tmp_val[$k] = stripslashes($v);
					}
					$value = $tmp_val;
				}
				else
				{
					for ($j = 0; $j < sizeof($value); $j++)
					{
						$value[$j] = stripslashes($value[$j]);
					}
				}
			}
			else $value = stripslashes($value);
		}
		return $value;
	}

	function sti_array_is_associative($array)
	{
		if (is_array($array) && !empty($array))
		{
			for ($iterator = count($array) - 1; $iterator; $iterator--)
			{
				if (!array_key_exists($iterator, $array)) return true;
			}
			return !array_key_exists(0, $array);
		}
		return false;
	}

	function sti_get_parameters($enable_compression)
	{
		$result = "";
		foreach (array_keys($_GET) as $key){
		  if(isset($_GET[$key])){
            if( is_array($_GET[$key]))
            foreach (array_keys($_GET[$key]) as $k) $result .= "&$k=".rawurlencode(sti_strip($_GET[$key][$k]));
            else
            $result .= "&$key=".rawurlencode(sti_strip($_GET[$key]));
            }
        }
		foreach (array_keys($_POST) as $key){
		  if(isset($_POST[$key]))
          if( is_array($_POST[$key]))
          foreach (array_keys($_POST[$key]) as $k) $result .= "&$k=".rawurlencode(sti_strip($_POST[$key][$k]));
          else
          $result .= "&$key=".rawurlencode(sti_strip($_POST[$key]));
        }
		
		return "?".substr($result, 1)."&stimulsoft_enable_compression=".($enable_compression ? "true" : "false");
        
	}

	function sti_get_parameter_value($parameter_name, $default_value = "")
	{
		if (isset($_POST[$parameter_name])) return rawurldecode(sti_strip($_POST[$parameter_name]));
		else if (isset($_GET[$parameter_name])) return rawurldecode(sti_strip($_GET[$parameter_name]));
		
		return $default_value;
	}

	function sti_parse_query_parameters($query)
	{
		$bracket_open = "{";
		$bracket_close = "}";
		$result = "";
		while (strpos($query, $bracket_open) !== false)
		{
			$result .= substr($query, 0, strpos($query, $bracket_open));
			$query = substr($query, strpos($query, $bracket_open) + 1);
			$parameter_name = substr($query, 0, strpos($query, $bracket_close));
			$parameter_value = sti_get_parameter_value($parameter_name);
			$result .= sti_get_parameter($parameter_name, $parameter_value);
			$query = substr($query, strpos($query, $bracket_close) + 1);
		}
		
		return $result.$query;
	}

	function sti_create_connection_string($client_data)
	{
		$connection_type = sti_get_xml_value($client_data, "ConnectionType");
		$connection_string = sti_get_xml_value($client_data, "ConnectionString");
		$connection_string = base64_decode($connection_string);
		$connection_string = sti_get_connection_string($connection_type, $connection_string);
		$username = sti_get_xml_value($client_data, "UserName");
		$password = sti_get_xml_value($client_data, "Password");
		
		if ($username != null) $connection_string .= ";user=$username";
		if ($password != null)
		{
			$password = base64_decode($password);
			$connection_string .= ";password=$password";
		}
		
		return $connection_string;
	}

/**
	 *  Saving a report.
	 *  Response to the client - error code. Standard codes:
	 *      -1: the message box is not shown
	 *       0: shows the "Report is successfully saved" message
	 *  In other cases shows a window with the defined value
	 */
	function sti_save_report($report, $report_key, $new_report_flag)
	{
		// The code for saving a report can be placed here
		
		if (file_put_contents(Yii::app()->basePath ."/uploads/sys/reports/".$report_key, $report) === false) return "Error when saving a report";
		return "-1";
	}


	/**
	 *  The function for changing values on parameters by their name in the SQL query.
	 *  Parameters can be set as {ParamName} in the SQL query.
	 *  By default values are taken according to the name of a parameter in the URL string or in the POST data.
	 */
	function sti_get_parameter($parameter_name, $default_value)
	{
		/*switch ($parameter_name)
		{
			case "ParameterName1": return "Value1";
			case "ParameterName2": return "Value2";
		}*/
		
		return $default_value;
	}


	/**
	 *  Getting the Connection String when requesting the client's Flash application to a database.
	 *  In this function you can change the Connection String of a report.
	 */
	function sti_get_connection_string($connection_type, $connection_string)
	{
		switch ($connection_type)
		{
			case "StiSqlDatabase": return "Data Source=SERVER\SQLEXPRESS;Initial Catalog=master;Integrated Security=True";
			case "StiMySqlDatabase": return "Server=localhost;Database=prolabnew;Port=3306;User=root;Password=;";
			case "StiOdbcDatabase": return "DSN=MS Access Database;DBQ=D:\NWIND.MDB;DefaultDir=D:;DriverId=281;FIL=MS Access;MaxBufferSize=2048;PageTimeout=5;UID=admin;";
			case "StiPostgreSQLDatabase": return "Server=localhost;Database=db_name;Port=5432;User=postgres;Password=postgres;";
		}
		
		return $connection_string;
	}


	/**
	 *  Saving an exported report.
	 *  Response to the client - error code. Standard codes:
	 *      -1: the message box is not shown
	 *       0: shows the "Report is successfully saved" message
	 *  In other cases shows a window with the defined value
	 */
	function sti_export_report($format, $report_key, $file_name, $data)
	{
	   //$path=Yii::app()->basePath ."/uploads/sys/reports/$report_key";
		if (file_put_contents("../exports/$file_name", $data) === false) return "Error when saving an exported report";
		return "-1";
	}



	/**
	 *  Returns .mrt or .mdc file by string ID that was set when running.
	 *  If necessary, it is possible to change the code for getting a report by its ID from file or from database.
	 */
	function sti_get_report($report_key)
	{
		/*switch ($report_key)
		{
			case "report1": return file_get_contents("/reports/Report.mrt");
			case "report2": return file_get_contents("/reports/Document.mdc");
		}*/
		$path=Yii::app()->basePath ."/uploads/sys/reports/$report_key";
		if (file_exists($path)) return file_get_contents($path);
		
		// If there is no need to load the report, then the empty string will be sent
		return "";
		
		// If you want to display an error message, please use the following format
		return "ServerError:Some text message";
	}


?>