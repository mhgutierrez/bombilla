<?php
Class Bombilla{
	
	public $encendida=0;
	
	function __construct(){
		echo '<a href=?estado><img src="foco_ok.png"></a>';
	}
	
	function enciendeBombilla(){
		if ($_GET['estado']){
			
		}
	}
	
	function apagaBombilla(){
		if(encendida){
			return '<img src="foto_ok.png">';
		}
	}
}

$bombilla1 = new Bombilla();


?>

<img src="foco_ok.png>;