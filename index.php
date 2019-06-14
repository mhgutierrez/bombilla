<?php

//controlador

if (isset($_GET['on'])){
	echo on();	
	}
	else{
	echo off();
	}
	
function on(){
	return '<a href="index.php?off=1" ><img src="lightbulb_on.png"></a>';
}

function off(){
	return '<a href="index.php?on=1" ><img src="lightbulb_off.png"></a>';
}



?>