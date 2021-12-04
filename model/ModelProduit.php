<?php
require_once File::build_path(array("model","Model.php"));

class ModelProduit {
	private $idProduit;
	private $nomProduit;
	private $formatProduit;
	private $prixProduit;
	private $imageProduit;

	public function __construct($id = NULL, $nom = NULL, $format = NULL, $prix = NULL, $image = NULL) {
		if (!is_null($id)&&!is_null($nom)&&!is_null($format)&&!is_null($prix)&&!is_null($image)) {
			$this->idProduit = $id;
			$this->nomProduit = $nom;
			$this->formatProduit = $format;
			$this->prixProduit = $prix;
			$this->imageProduit = $image;
		}
	}

	public function get($value) {
		return $this->$value;
	}

    

    public static function selectAll() {
    	$pdo = Model::getPDO();
    	$rep = $pdo->query('SELECT * FROM Produit;');
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
    	$tab_prod = $rep->fetchAll();
    	return $tab_prod;
    }

    public static function select($value) {
    	$sql="SELECT * FROM Produit WHERE idProduit=:nom_tag";
    	$req_prep=Model::getPDO()->prepare($sql);

    	$values=array("nom_tag"=>$value);

    	$req_prep->execute($values);

    	$req_prep->setFetchMode(PDO::FETCH_CLASS,'idProduit');
    	$tab_prod=$req_prep->fetchAll();

    	if(empty($tab_prod))
    		return false;
    	return$tab_prod[0];
    }
}
?>