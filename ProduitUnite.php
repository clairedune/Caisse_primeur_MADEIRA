<?php

require_once('Produit.php');

class ProduitKilo extends Produit{

	$pomme = new Produit ('Pomme');
	$pomme->poids = 2 ;
	$pomme->prixUnite = 1 ;
	
	protected function __construct($pomme){
		echo "<br>Nouvelle vente";
		parent::__construct($pomme);
 		$this->nom = $pomme;
	}

	protected function __toString(){
		return "<hr>Nouvelle vente !".
			"<br> Produit : ".$this->nom.
			"<br> Prix : ".$this->prixUnite."<hr>";
	}

	protected function venteUnite(){
		return ($this->prixUnite);
	}

}

?>