<?php

class Friuts{

	public $color;
	public $name;

	function set_color($color){
		$this->color = $color;
	}

	function get_color(){
		return $this->color;
	}

	function set_name($name){
		$this->name = $name;
	}
	function get_name(){
		return $this->name;
	}
}

$obj = new Friuts();
$obj->set_color("Blue");
echo $obj->get_color();
echo "<br/>";
$obj2 = new Friuts();
$obj2->set_name("Hillo Miac");
echo $obj2->get_name();


?>