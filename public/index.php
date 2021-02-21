<?php
$ROOT = dirname(__DIR__);

require $ROOT."/App/Autoloader.php";

Autoloader::register();

use App\Config;
use App\Database;
use App\App;
use App\Basic;

$app = App::bdd();

$collect = $app->query("SELECT * FROM prices", "App\Table\Price");

$title = Config::init()->get("APP_NAME");

$sum = Basic::device(App::getsum($collect));

//die(var_dump($sumtab));

$template = 1;

if(!empty($_GET['view'])){

	$view = $_GET['view'];

}else{

	$view = "home";
}

ob_start();

if($view === "home"){

	require $ROOT."/resources/views/home.view.php";

}else{

	require $ROOT."/resources/views/home.view.php";

}	

$view = ob_get_clean();

if($template === 1){

	require $ROOT."/resources/views/templates/master.view.php";

}else{

	require $ROOT."/resources/views/templates/app.view.php";
}

