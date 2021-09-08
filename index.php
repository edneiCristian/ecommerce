<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;



$app =new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page =new Page();
	
	$page ->setTpl("index");
			
});

/*
$app->get('/admin/users/:iduser', function($iduser){
	User::verifyLogin();
	$user = new User();
	$user->get((int)$iduser);
	$page = new PageAdmin();
	$page ->setTpl("users-update", array(
			"user"=>$user->getValues()
	));
});
*/
$app->run();

 ?>