<?php

Class Bombilla{
	function on(){
	return '<a href="index.php?off=1"><img style="background:rgba(252, 245, 239,0.25); border-radius:100px; margin:50px 0 0 50px; padding:80px;border:1px solid #313D47" src="lightbulb_on.png"></a></div>';
}

	function off(){
	return '<a href="index.php?on=1"><img style="background:rgba(252, 245, 239,0.25); border-radius:100px; margin:50px 0 0 50px; padding:80px;border:1px solid #313D47" src="lightbulb_off.png"></a></div>';
}
	
}

//controlador
$bombilla1 = new Bombilla();




if (!isset($_GET['off'])){
	echo $bombilla1->on();	
	}
	else{
		echo $bombilla1->off();
	}
	
	







?>