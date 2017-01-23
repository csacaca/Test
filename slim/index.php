<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
// Create and configure Slim app
require 'vendor/autoload.php';
/*$config = ['settings' => [
    'addContentLengthHeader' => false,
]];*/
//$app = new \Slim\App($config);

$app = new \Slim\App();

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('templates/');
};

# Aqui redireccionamos a la plantilla para ver el listado de empleados
$app->get('/', function ($request, $response, $args) {
	$data = file_get_contents("employees.json");
	$products = json_decode($data, true);
	//print_r($products);
    return $this->view->render($response, 'list.php', [
        'name' => $products
    ]);
})->setName('profile');


# Aqui redireccionamos a la plantilla para ver el listado de empleados
$app->get('/nuevo', function ($request, $response, $args) {
	$data = file_get_contents("employees.json");
	$products = json_decode($data, true);
	//print_r($products);
    return $this->view->render($response, 'nuevo.php', [
    ]);
})->setName('nuevo');


function fcadena($email, $eemail){
	/*if ($eemail = $email) {

	}*/
	return "hello";
}

/*$app->get('/search/{email}', function ($request, $response, $args) {

	$data = file_get_contents("employees.json");
    $products = json_decode($data, true);

    $narreglo = array_filter($products,) fcadena();

})->setName('nuevo');*/


$app->post('/search', function () {
    //$data = $request->getParsedBody();
    echo "ddadadsddadsds";
});


# Aqui redireccionamos a la plantilla para ver el listado de empleados
$app->post('/guardar', function($request, $response, $args){
    echo "asdfasdf";

});
# Aqui redireccionamos a la plantilla para ver el detalle del empleado
$app->get('/detalle/{name}/{email}/{phone}/{address}/{position}/{salary}/{skills}', function ($request, $response, $args) {
	return $this->view->render($response, 'detalle.php', [
        'name' => $args['name'],
        'email' => $args['email'],
        'phone' => $args['phone'],
        'address' => $args['address'],
        'position' => $args['position'],
        'salary' => $args['salary'],
        'skills' => $args['skills']
    ]);
})->setName('detalle');



// Run app
$app->run();