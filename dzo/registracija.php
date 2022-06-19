<?php
define('BASE_PATH',true);
include "konekcija.php";
if(isset($_POST['prihvati'])){
	try{
     $ime=$_POST['ime'];
	 $punoime=$_POST['punoime'];
	 $prezime=$_POST['prezime'];
	 
	 $posta=$_POST['posta'];
	 $sifra=$_POST['sifra'];
	 
	 
	 $sql="SELECT count(posta) as num from korisnik where posta=:posta";
	 $izjava=$konekcija->prepare($sql);
	 $izjava->bindValue(':posta',$posta);
	 $izjava->execute();
	 $red=$izjava->fetch(pdo::FETCH_ASSOC);
	 
	 if($red['num']>0){
		 echo "Posta vec postoji pokusajte drugu";
	 }else{
		 $izjava=$konekcija->prepare("insert into korisnik(ime,sifra,punoime,prezime,posta)values(
		 :ime,:sifra,:punoime,:prezime,:posta
		 
		 )");
		 $izjava->bindParam(":ime",$ime);
		 $izjava->bindParam(":sifra",$sifra);
		 $izjava->bindParam(":punoime",$punoime);
		 $izjava->bindParam(":prezime",$prezime);
		 $izjava->bindParam(":posta",$posta);
		if($izjava->execute()){
			echo "<center>Registracija je uspesna</center>";
			echo "<center><a href='login.php'>Stranica za logovanje</a></center>";
		}else{
			$greska="Greska".$e->getMessage();
			echo $greska;
		}
	 }
	}catch(PDOException $e){
		 $greska="Greska".$e->getMessage();
		 echo $greska;
	 
	}
}
?>
<form method="post">
<center>
<h1>Forma za registrovanje</h1>
<label>Unesite vase puno ime</label><br/>
<input type="text" name="punoime" placeholder="Upisite vase puno ime"><br/>
<label>Unesite vase prezime</label><br/>
<input type="text" name="prezime" placeholder="Upisite vase prezime"><br/>
<label>Upisite vase korisnickoime</label><br/>
<input type="text" name="ime" placeholder="Upisite vase korisnickoime"><br/>
<label>Upisite korisnicku postu</label><br/>
<input type="text" name="posta" placeholder="Upisite vasu korisnicku postu"><br/>
<label>Upisite vasu korisnicku sifru</label><br/>
<input type="password" name="sifra" placeholder="upisite vasu korisnicku sifru"><br/>
<input type="submit" name="prihvati" placeholder="prihvati">
</form>
</center>