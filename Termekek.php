<?php
class Termek{
private $azon;
private $nev;
private $leiras;
private $ar;
private $mennyiseg;
private $akcioe;
private $ertekeles;
private $kep;



public function __construct($id, $name, $description, $price, $number, $issale, $rating, $image){
	$this->azon = $id;
	$this->nev = $name;
	$this->leiras = $description;
	$this->ar = $price;
	$this->mennyiseg = $number;
	$this->akcioe = $issale;
	$this->ertekeles = $rating;
	$this->kep = $image;

}


public function termekLista(){
	$db = new mysqli("localhost", "root", "Faszom200", "shop");
	
	$lekerdezes = "SELECT * FROM shop_items";
	
	$eredmény = $db->query($lekérdezés);
if(mysqli_num_rows($eredmény) > 0){
	$termekek = array();
	while($sor = $eredmeny->fetch_assoc()){
		$termek = new Termek($sor['id'], $sor['name'], $sor['description'], $sor['price'], $sor['number'], $sor['issale'], $sor['rating'], $sor['image']);
		array_push($termekek, $termek);
	}
	$db->close();
	return termekek;
}else{
	$db->close();
	return NULL;
}
	
	
}




}




?>                                                                      
