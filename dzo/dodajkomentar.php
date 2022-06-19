<?php
define('BASE_PATH',true);
include "konekcija.php";
if(isset($_POST['prihvati'])){
try{
$korisnik=$_POST['korisnik'];
$komentar=$_POST['komentar'];

$sql="SELECT count(korisnik) as num from komentar where korisnik=:korisnik";
$izjava=$konekcija->prepare($sql);
$izjava->bindValue(':korisnik',$korisnik);
$izjava->execute();

$red=$izjava->fetch(PDO::FETCH_ASSOC);

if($red['num']>0){
    
    echo "Komentar vec postoji pokusajte drugi";

}else{
    $izjava=$konekcija->prepare("insert into komentar(korisnik,komentar) values(
        :korisnik,:komentar
        
        )");
        $izjava->bindParam(":korisnik",$korisnik);
        $izjava->bindParam(":komentar",$komentar);
        if($izjava->execute()){
			
            echo "<center>Slanje komentara je uspesna</center>";
			echo "<center><a href='vesti.php'>Stranica vesti</a></center>";
        
        }else{
                $greska="Greska".$e->getMessage();
                echo $greska;
            }
}
}
catch(PDOException $e){
    $greska="Greska".$e->getMessage();
    echo $greska;
}
}
?>
<form method="post">
<center>
<h2>Posalji Komentar</h2>
<input type="text" name="korisnik" placeholder="Ko salje komentar">
<input type="text" name="komentar" placeholder="Upisi Komentar">
<input type="submit" name="prihvati" value="Posalji komentar">

</center>
</form>