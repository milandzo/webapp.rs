<?php
define("BASE_PATH",true);
include "../konekcija.php";
if(isset($_POST['prihvati'])){
try{
$naslov=$_POST['naslov'];
$vesti=$_POST['vesti'];

$sql="SELECT count(naslov) as num from vesti where naslov=:naslov";

$izjava=$konekcija->prepare($sql);
$izjava->bindValue(":naslov",$naslov);
$izjava->execute();

$red=$izjava->fetch(PDO::FETCH_ASSOC);

if($red['num']>0){

    echo "vest vec postoji pokusajte drugu";

}else{
    $izjava=$konekcija->prepare("insert into vesti(naslov,vesti)values(
        :naslov,:vesti
        )");
    $izjava->bindParam(":naslov",$naslov);
    $izjava->bindParam(":vesti",$vesti);
    if($izjava->execute()){
        echo "<center>Vest je uspesno napravljena</center>";
        echo "<center><a href='panel.php'>Povratak na administraciju</a></center>";
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
<h2>Napravi vesti</h2>
<input type="text" name="naslov" placeholder="Ko pravi vesti">
<input type="text" name="vesti" placeholder="Vesti">
<input type="submit" name="prihvati" value="Napravi vest">

</form>

</center>