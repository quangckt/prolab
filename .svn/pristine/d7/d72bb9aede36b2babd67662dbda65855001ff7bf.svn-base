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

$postdata = http_build_query(
    array(
        'sdate' => '2012-12-14',
        'edate' => '2012-12-14'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);
$result = file_get_contents('http://192.0.0.222/form/Download', false, $context);
  var_dump($result);

	
?>