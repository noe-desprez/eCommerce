<?php
require_once File::build_path(array('model','ModelProduit.php')); // chargement du modèle
class ControllerProduit {
    public static function readAll() {
        $tab_p = ModelProduit::selectAll();     //appel au modèle pour gerer la BD
        $view='list';
        $controller = "produit";
        require File::build_path(array('view','view.php')); //"redirige" vers la vue
    }
    public static function read($idProduit){
        $p=ModelProduit::select($idProduit);
        $view='detail';
        $controller='produit';
        require File::build_path(array('view','view.php'));
    }
}
?>
