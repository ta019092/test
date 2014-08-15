<?php
//Classe voiture en place
class Voiture {
	private $num;
	private $sorte;
	private $annee;
	private $prix;
	//Le constructeur
	function __construct($num,$sorte,$annee,$prix) {
		$this->num = $num;
		$this->sorte = $sorte;
		$this->annee = $annee;
		$this->prix = $prix;
	}
	function getNum(){
		return $this->num;
	}
	function getSorte(){
		return $this->sorte;
	}
	function getAnnee(){
		return $this->annee;
	}
	function getPrix(){
		return $this->prix;
	}
	function setNum($num){
		$this->num=$num;
	}
	function setSorte($sorte){
		$this->sorte=$sorte;
	}
	function setAnnee($annee){
		$this->annee=$annee;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function afficher() {
		$msg="<br>".$this->num."&nbsp;&nbsp;&nbsp;";
		switch($this->sorte){
			case 1 : $msg.="Américaine";
					  break;
			case 2 : $msg.="Japonaise";
			          break;
			default: $msg.="Autre";
		}
		$msg.="&nbsp;&nbsp;&nbsp;".$this->annee."&nbsp;&nbsp;&nbsp;".$this->prix."$";
		echo $msg;
	}
}
?>