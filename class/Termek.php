<?php
include 'config/config.php';

class Termek{
public $azon;
public $nev;
public $leiras;
public $ar;
public $mennyiseg;
public $akcioe;
public $ertekeles;
public $kep;



function __construct($id, $name, $description, $price, $number, $issale, $rating, $image){
	$this->azon = $id;
	$this->nev = $name;
	$this->leiras = $description;
	$this->ar = $price;
	$this->mennyiseg = $number;
	$this->akcioe = $issale;
	$this->ertekeles = $rating;
	$this->kep = $image;

}

/* termekAdatok($termekid){

	$db new mysqli("localhost", "root", "Faszom200", "shop");
	$lekerdezes = "SELECT * FROM shop_items WHERE id=$termekid";
	$eredmeny = $db->query($lekerdezes);

	if(mysqli_num_rows($eredmeny) > 0){
		while($sor = $eredmeny->fetch_assoc()){
			$termek = new Termek();
		}

	}





} */


static public function termekInfo($termekid){
	//$db

	$lekerdezes = "SELECT * FROM shop_items WHERE id=$termekid";
	$eredmeny = $db->query($lekerdezes);

	if(mysqli_num_rows($eredmeny) > 0){
		$termekek = array();
		while($sor = $eredmeny->fetch_array(MYSQLI_ASSOC)){
			$termek = new Termek($sor['id'], $sor['name'], $sor['description'], $sor['price'], $sor['number'], $sor['issale'], $sor['rating'], $sor['image']);
			array_push($termekek, $termek);
			unset($termek);
		}
		$db->close();
		return $termekek;
	}

}


static public function termekLista(){
	$db = new mysqli("localhost", "root", "Faszom200", "shop") or die("Couldn't connect");
	
	$lekerdezes = "SELECT * FROM shop_items";
	
	$eredmeny = $db->query($lekerdezes);
	if(mysqli_num_rows($eredmeny) > 0){
	$termekek = array();
	while($sor = $eredmeny->fetch_array(MYSQLI_ASSOC)){
		$termek = new Termek($sor['id'], $sor['name'], $sor['description'], $sor['price'], $sor['number'], $sor['issale'], $sor['rating'], $sor['image']);
		array_push($termekek, $termek);
		unset($termek);
	}
	$db->close();
	return $termekek;
}

	
	
}




}




?>                                                                      
