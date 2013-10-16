<style>
th,td{border: 1px solid; }
th,td{ padding: 2px;}
tr th {
	font-weight:bold;
    text-align: center !important;
    vertical-align: middle !important;
    
}
.even {
	background-color:#EFEFEF;
}
</style>
<?php
$columns=$this->getHeadersTable($search);
?>             
<table border="1" cellpadding="4" cellspacing="0" width="100%">
<thead>
<tr align="center">
<?php
foreach ($columns as $th){
 echo "<th>";
 echo $th;
 echo "</th>"; 
}
?>
</tr>
</thead>
<tbody>
<?php
$even ='';  
if(isset($dataProvider))
foreach($dataProvider->rawData as $key=>$data ){
	$even =($even==='')?"even":'';   
     echo "<tr class='$even'>";
      $k=0;   
     foreach($columns as $c){
       if($k==0){
        $t=$key; $k=1;
       } else  
      $t=0;  
      if(isset($data[$c]))  
       $t= number_format($data[$c],2,',','.'); ;
     echo "<td>".$t."</td>" ;
     }
    echo "</tr>";   
	}
    
?>
</tbody>

</table>
