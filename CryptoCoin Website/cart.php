<?php 
session_start();
include_once("config.php");

if(isset($_GET["item_id"])){
	
	addToCart($_GET["item_id"]);
	//header("location:checkout.php");
	header("location:index.php");
}


function addToCart($id)
{
	if(isset($_SESSION["util_$id"]))
	{
		$_SESSION["util_$id"]+=1;	
	}
	else
		$_SESSION["util_$id"]=1;
	
}

?>