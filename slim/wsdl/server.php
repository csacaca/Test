<?php
require_once "lib/nusoap.php";

$server = new soap_server();
$server->configureWSDL("empleadoservice", "http://localhost/slim/servicio.php");

$server->wsdl->addComplexType(
    'arreglo',
    'complexType',
    'struct',
    'all',
    '',
    array(
     'id'=>array('name'=>'id','type'=>'xsd:string'),
     'name'=>array('name'=>'name','type'=>'xsd:string'),
     'age'=>array('name'=>'age','type'=>'xsd:string'),
     'gender'=>array('name'=>'gender','type'=>'xsd:string'),
     'email'=>array('name'=>'email','type'=>'xsd:string'),
     'phone'=>array('name'=>'phone','type'=>'xsd:string')
     )
    );


$server->register("empleado.consulta",
    array("pMinSalary" => "xsd:int","pMaxSalary" => "xsd:int"),
    array("return" => "tns:arreglo"),
    'urn:RM',
    'urn:RM#gamelist',
    'rpc',
    'encoded',
    'Get Games Info');

class empleado {

    public function consulta($pMinSalary, $pMaxSalary) {
        $data = file_get_contents("employees.json");
        $products = json_decode($data, true);

        for ($i=0; $i < count($products); $i++) {
            $salario = str_replace("$", "", $products[$i]['salary']);
            $salario = str_replace(",", "", $salario);
            if ($salario >= $pMinSalary && $salario <= $pMaxSalary) {
                $arreglo['id'] = $products[$i]['id'];
                $arreglo['name'] = $products[$i]['name'];
                $arreglo['age'] = $products[$i]['age'];
                $arreglo['gender'] = $products[$i]['gender'];
                $arreglo['email'] = $products[$i]['email'];
                $arreglo['phone'] = $products[$i]['phone'];
            }
        }

        //$arreglo['id'] = "dsadsadsad";
        //$arreglo[] = "b";
        //$arreglo[] = "c";
        return $arreglo;
    }
}



@$server->service($HTTP_RAW_POST_DATA);
?>