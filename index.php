<?php

Class Bombilla{

	public $id;
	public $estado=false;

	function __construct($i){
		$this->id=$i;
	}
	
	function on(){
	return '<a href="index.php?off=1"><img style="background:rgba(252, 245, 239,0.25); border-radius:100px; margin:50px 0 0 50px; padding:80px;border:1px solid #313D47" src="lightbulb_on.png"></a></div>';
}

	function off(){
	return '<a href="index.php?on=1"><img style="background:rgba(192, 214, 224,0.15); border-radius:100px; margin:50px 0 0 50px; padding:80px;border:1px solid #313D47" src="lightbulb_off.png"></a></div>';
}
	
}

//controlador
/*$bombilla1 = new Bombilla();

$bombilla2 = new Bombilla();*/

for ($i=0;$i<5;$i++){
$arrayBombillas[$i] = new Bombilla($i);
	if (!isset($_GET['off'])){
		echo $arrayBombillas[$i]->on();	
		}
		else{
			echo $arrayBombillas[$i]->off();
		}
}

/*if (!isset($_GET['off'])){
	echo $bombilla1->on();	
	echo $bombilla2->on();
	}
	else{
		echo $bombilla1->off();
		echo $bombilla2->off();
	}
	*/

	
	







?>