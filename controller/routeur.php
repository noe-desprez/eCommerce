<?php
require_once File::build_path(array("controller","ControllerProduit.php"));
require_once File::build_path(array("controller","ControllerUtilisateur.php"));

if(!isset($_GET['controller'])){
	$_GET['controller']='produit';
	$controller=$_GET['controller'];
}
else{
	$controller=$_GET['controller'];
}

if($controller=='produit'){
	if(!isset($_GET['action'])){
		$_GET['action']='readAll';
		$action=$_GET['action'];
	}
	else{
		$action=$_GET['action'];
	}

	if($action=='readAll'){
		ControllerProduit::$action();
	}

	if($action=='read'){
		if(!isset($_GET['idProduit'])){
			$_GET['idProduit']='';
			$idProduit=$_GET['idProduit'];
		}
		else{
			$idProduit=$_GET['idProduit'];
		}
		ControllerProduit::$action($idProduit);
	}
}

?>
