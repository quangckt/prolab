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
        'sdate' => '2012-01-01',
        'edate' => '2012-12-30',
        'period' => '1',
        'uid' => '1',
        'uid' => '3',
        'uid' => '49'
    );

function http_post($url, $data)
{
    $data_url = http_build_query($data);
    $data_len = strlen($data_url);

    return array('content' => file_get_contents($url, false, stream_context_create(
        array('http' => array('method' => 'POST',
            'header' => "Content-type: application/x-www-form-urlencoded\r\n"
                . "Content-Length: " . $data_len . "\r\n",
            'content' => $data_url
        ))))
    , 'headers' => $http_response_header
    );
}

$data = http_post('http://192.0.0.222/form/Download', $postdata);
//var_dump($data['content']);

$list = explode("\n", $data['content']);

foreach ($list as $no => $line) {
    $tab_cartes = explode("\t", $line);
    var_dump($tab_cartes);
    echo "<br/>";
}

/*

Yii::import('ext.EHttpClient.*');
 
//$uri = EUri::factory('http://192.0.0.222/form/Download');

$uri = EUri::factory('http://192.0.0.222/csl/query?action=run');


//$uri = EUri::factory('http://localhost:8083/prolab/assets/72a94ca0/css/bootstrap.css');

 
$temp_dir = realpath(sys_get_temp_dir()). DIRECTORY_SEPARATOR;
 
$temp_file = tempnam($temp_dir, 'TEST');
 
$config = array('adapter'=>'EHttpClientAdapterCurl', 'timeout'=>'60');
 
$client = new EHttpClient($uri, $config);
$client->setStream();

$client->setParameterGet($postdata);
$response = $client->request('POST');
 
if($response->isSuccessful()){
   // copy stream to temporary file... 
   copy( $response->getStreamName(), $temp_file );
   // other work with temporary file (ie decompress, decrypt, etc...)
}
else
   $response->getRawBody();

	*/
