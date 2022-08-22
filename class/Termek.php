<?php

class Termek{
public $azon;
public $nev;
public $leiras;
public $ar;
public $mennyiseg;
public $akcioe;
public $ertekeles;
public $kep;

public $dab;



function __construct($id = null, $name = null, $description = null, $price = null, $number = null, $issale = null, $rating = null, $image = null){
	include("./config/config.php");
	$this->dab = $db;
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


public function termekInfo($termekid){
	$database = $this->dab;

	$lekerdezes = "SELECT * FROM shop_items WHERE id=$termekid";
	$eredmeny = $database->query($lekerdezes);

	if(mysqli_num_rows($eredmeny) > 0){
		$termekek = array();
		while($sor = $eredmeny->fetch_array(MYSQLI_ASSOC)){
			$termek = new Termek($sor['id'], $sor['name'], $sor['description'], $sor['price'], $sor['number'], $sor['issale'], $sor['rating'], $sor['image']);
			array_push($termekek, $termek);
			unset($termek);
		}
		$database->close();
		return $termekek;
	}else{
		echo "Couldn't find any products";
	}

}


public function termekKereses($query){

	$database = $this->dab;

	$lekerdezes = "SELECT * FROM shop_items
	WHERE (`name` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')";


	$eredmeny = $database->query($lekerdezes);

	if(mysqli_num_rows($eredmeny) > 0){
		$termekek = array();
		while($sor = $eredmeny->fetch_array(MYSQLI_ASSOC)){
			$termek = new Termek($sor['id'], $sor['name'], $sor['description'], $sor['price'], $sor['number'], $sor['issale'], $sor['rating'], $sor['image']);
			array_push($termekek, $termek);
			unset($termek);
		}
		$database->close();
		return $termekek;
	}
	
}


public function termekLista(){
	//$db = new mysqli("localhost", "root", "Faszom200", "shop") or die("Couldn't connect");
	$database = $this->dab;
	
	$lekerdezes = "SELECT * FROM shop_items";
	
	$eredmeny = $database->query($lekerdezes);
	if(mysqli_num_rows($eredmeny) > 0){
	$termekek = array();
	while($sor = $eredmeny->fetch_array(MYSQLI_ASSOC)){
		$termek = new Termek($sor['id'], $sor['name'], $sor['description'], $sor['price'], $sor['number'], $sor['issale'], $sor['rating'], $sor['image']);
		array_push($termekek, $termek);
		unset($termek);
	}
	$database->close();
	return $termekek;
}

	
	
}




}




?>                                                                      
