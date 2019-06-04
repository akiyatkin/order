<?php
use infrajs\load\Load;
use infrajs\rest\Rest;
use infrajs\ans\Ans;
use infrajs\event\Event;
use akiyatkin\order\Order;
use infrajs\path\Path;
use infrajs\view\View;
use infrajs\each\Each;
use infrajs\rubrics\Rubrics;
//ob_start();
date_default_timezone_set("Europe/Samara");

return Rest::get( function (){

}, function ($name) {
	$php = Path::theme('-showcase/api/'.$name.'.php');
	if ($php) return include($php);
});
