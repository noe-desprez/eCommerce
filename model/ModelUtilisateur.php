<?php
require_once File::build_path(array("model","Model.php"));

class ModelUtilisateur {
	private $login;
	private $password;
	private $nom;
	private $prenom;
	private $email;

	public function __construct($log = NULL, $pwd = NULL, $nomU = NULL, $prenom = NULL, $mail = NULL) {
		if (!is_null($log)&&!is_null($pwd)&&!is_null($nomU)&&!is_null($prenom)&&!is_null($mail)) {
			$this->login = $log;
			$this->password = $pwd;
			$this->nom = $nomU;
			$this->prenom = $prenom;
			$this->email = $mail;
		}
	}

	public function get($value) {
		return $this->$value;
	}

    

    public static function selectAll() {
    	$pdo = Model::getPDO();
    	$rep = $pdo->query('SELECT * FROM Utilisateur;');
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
    	$tab_prod = $rep->fetchAll();
    	return $tab_prod;
    }

    
}
?>