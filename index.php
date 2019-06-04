<?php
use infrajs\load\Load;
use infrajs\rest\Rest;
use infrajs\ans\Ans;
use infrajs\access\Access;
use akiyatkin\order\Order;
date_default_timezone_set("Europe/Samara");
Access::debug(true);

echo Rest::get( function () {
	echo 'Order';
});
