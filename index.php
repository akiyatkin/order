<?php
use infrajs\load\Load;
use infrajs\rest\Rest;
use infrajs\ans\Ans;
use infrajs\access\Access;
use infrajs\session\Session;
use akiyatkin\order\Order;

date_default_timezone_set("Europe/Samara");
Access::debug(true);

echo Rest::get( function () {
	$rules = Order::getRules();
	$basket = Session::get('orders.my');
	echo '<pre>';
	print_r($basket);
});
