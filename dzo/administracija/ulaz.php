<?php
define('BASE_PATH',true);
include "../konekcija.php";
$poruka="";
try{
if(isset($_POST['prihvati'])){
    if(empty($_POST['ime']) || empty($_POST['sifra'])){
        $poruka="<label>Sva polja moraju biti popunjena</label>";
		echo $poruka;
    }else{
        $query="SELECT * from adminulaz where ime=:ime and sifra=:sifra";
		$izjava=$konekcija->prepare($query);
		$izjava->execute(
	     array(
         'ime'  => $_POST['ime'],
         'sifra' => $_POST['sifra']
)
	);
    $brojac=$izjava->rowCount();
	if($brojac>0){
		$_SESSION['ime']=$_POST['ime'];
		header("Location:naredno.php");
	}else{
		$poruka="<label>Korisnickoime ili sifra nisu ispravni molimo vas upisite ispravne podatke</label>";
	}
		
	}
}
}
	catch(PDOException $error){
		$poruka=$error->getMessage();
	
}
    
?>
<form name="ulaz" action="" method="post">
<center>
<h1>Forma za Adminsitratore</h1>
<label>Upisite vase korisnickoime</label><br/>
<input type="text" name="ime" value="Upisite vase korisnickoime"><br/>
<label>Upisite vasu korisnicku sifru</label><br/>
<input type="password" name="sifra" value="upisite vasu korisnicku sifru"><br/>
<input type="submit" name="prihvati" value="prihvati">
</form>
</center>