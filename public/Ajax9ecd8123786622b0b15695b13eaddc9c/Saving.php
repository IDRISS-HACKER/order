<?php 
$ROOT = "../../";

require $ROOT."/App/Autoloader.php";

Autoloader::register();

use App\Config;
use App\Database;
use App\App;

$app = App::bdd();

$ammount = $_POST["price"];

if(strlen($ammount) >= 3){

	$app->prepare("INSERT INTO prices(price) VALUES(?)", [$ammount], __class__);

	echo json_encode(["success"]);

}else{

	echo json_encode(["error"]);

}

