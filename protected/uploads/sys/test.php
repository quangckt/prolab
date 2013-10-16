<?php




/*
$myFile = "attlog.txt";

$content = file($myFile);
  foreach($content as $no => $line){
    $tab_cartes = explode("\t",$line);
   var_dump($tab_cartes);
   echo "<br/>";
   
  }
  
 */ 
 

$postdata =
    array(
     'sdate' => '2012-12-14', 
    'edate' => '2012-12-14',
    'period'=>'1',
    'uid'=>'1',
    'uid'=>'2',
    'uid'=>'5'
);


Yii::import('ext.httpclient.*');
 
$uri = EUri::factory('http://192.0.0.222/form/Download');
 
$temp_dir = realpath(sys_get_temp_dir()). DIRECTORY_SEPARATOR;
 
$temp_file = tempnam($temp_dir, 'TEST');
 
$config = array('adapter'=>'EHttpClientAdapterCurl', 'timeout'=>'60');
 
$client = new EHttpClient($uri, $config);
$client->setStream();

$client->setParameterGet($postdata);
$response = $client->request('POST');
 
if($response->isSuccessful()){
   // copy stream to temporary file... 
   copy( $response->getStreamName(), $temp_dir . $temp_file );
   // other work with temporary file (ie decompress, decrypt, etc...)
}
else
   $response->getRawBody();

	
