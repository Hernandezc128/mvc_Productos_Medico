<?php
	require_once("../model/modelo.php");
	$usuarios = new Usuario();
	$pd = $usuarios->lista_platillos();
	require_once("../view/vista.php");
?>