<?php 
$ROOT = "../../";

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
	//require "../../resources/views/home.view.php";
 ?>
<div class="card">
<div class="card-header">
	<span>Total: </span> <span class="text-success font-weight-bold"><?= $sum ?></span>
</div>
<div class="card-body">
		<table class="table table-bordered table-hover table-striped">
		<thead class="bg-dark text-white-50">
			<td>somme</td>
			<td>date</td>
			<td>action</td>
		</thead>
		<?php foreach($collect as $price){ ?>
		<tr>
			<td><?= $price->price ?><span class="text-muted"><?= \App\Basic::device() ?></span></td>
		 	<td><?= $price->timer ?></td>
		 	<td row="2">
		 		<a href="./Ajax9ecd8123786622b0b15695b13eaddc9c/Edit.php" class="btn btn-success disabled">edit</a>
		 		<a href="./Ajax9ecd8123786622b0b15695b13eaddc9c/Delet.php" class="btn btn-danger disabled">delet</a>
		 	</td>
		</tr>
		 <?php } ?>
	</table>
</div>
</div>