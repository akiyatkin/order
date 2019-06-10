<?php
namespace akiyatkin\order;
use akiyatkin\fs\FS;
use infrajs\load\Load;
use infrajs\path\Path;
use infrajs\once\Once;
use infrajs\excel\Xlsx;
use infrajs\db\Db;
use infrajs\event\Event;
use infrajs\ans\Ans;
use infrajs\session\Session;


class Order {
	public static $conf = [];
	public static function getRules() {
		$rules = Load::loadJSON(Order::$conf['rules']);
		return $rules;
	}
}