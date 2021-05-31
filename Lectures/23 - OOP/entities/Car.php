<?php

class Car {

	public $model;
	public $brand;
	private $year;
	public static $tax;

	function __construct($model) {
		$this->model = $model;
	}

	function set_year ($y) {
		$this->year = $y;
		return $this->get_year();
	}

	function get_year () {
		return $this->year;
	}

	public static function getTax () {
		return self::$tax;
	}
}

?>