
<?php

use \Slim\Slim;
use \Classes\Page;

$app = new Slim();
$app->config('debug', true);
$app->get('/',function()
	{
		$page = new Page();
		$page->setTpl("index");
	}
);
$app->run();
 ?>
