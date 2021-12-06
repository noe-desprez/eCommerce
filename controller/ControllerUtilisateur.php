<?php
require_once File::build_path(array('model','ModelUtilisateur.php')); // chargement du modèle
class ControllerUtilisateur {
    public static function readAll() {
        $tab_p = ModelUtilisateur::selectAll();     //appel au modèle pour gerer la BD
        $view='list';
        $controller = "utilisateur";
        require File::build_path(array('view','view.php')); //"redirige" vers la vue
    }
    
}
?>
