<?php
DEFINED('BASE_PATH') or die('Directne scripte nisu dozvoljene');
session_start();
$host="localhost";
$korisnik="root";
$sifra="";
$baza="ulaz";
$poruka="";
try{
	$konekcija=new pdo("mysql:host=$host;dbname=$baza",$korisnik,$sifra);
	$konekcija->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Konekcija odbijena".$e->getMessage();
}
?>