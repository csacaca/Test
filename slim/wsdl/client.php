<?php
require_once("lib/nusoap.php");
$client =  new nusoap_client('http://localhost/slim/server.php?wsdl');
if($err=$client->getError()){
 echo 'Error:'.$err;
}
$id=1;
$result = $client->call("empleado.consulta", array("pMinSalary" => "1000", "pMaxSalary" => "1500"));
var_dump($result);