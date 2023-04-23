<?php
define("BASE_PATH",true);
include "../konekcija.php";
?>
<title>Izmena korisnika</title>
<center>
<h1>Izmena korisnika</h1>
<form method="post">
<label>Izmeni broj korisnika</label><br/>
<input type="text" name="id" placeholder="Pronadji broj"><br/>
<label>Izmeni ime korisnika:</label><br/>
<input type="text" name="ime" placeholder="Pronadji ime"><br/>
<label>Izmeni prezime korisnika:</label><br/>
<input type="text" name="prezime" placeholder="Pronadji prezime"><br/>
<label>Izmeni postu korisnika</label><br/>
<input type="text" name="posta" placeholder="Pronadji postu"><br/>
<label>Izmeni sifru korisnika</label><br/>
<input type="text" name="sifra" placeholder="Izmeni sifru"><br/>
<label>Izmeni administraciju korisnika</label><br/>
<input type="text" name="admin" placeholder="Izmeni admina 0 ili 1"><br/>
<button type="submit" name="prihvati">Izmena</button>

</center>
</form>
<?php
if(isset($_POST['prihvati'])){

$id=$_POST['id'];
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$posta=$_POST['posta'];
$sifra=$_POST['sifra'];
$admin=$_POST['admin'];

$pdoquery="UPDATE korisnik SET ime=:ime,prezime=:prezime,posta=:posta,sifra=:sifra,admin=:admin WHERE id=:id";
$pokreni=$konekcija->prepare($pdoquery);
$pokreni->bindParam(':id');
$pokreni->bindParam(':ime');
$pokreni->bindParam(':prezime');
$pokreni->bindParam(':posta');
$pokreni->bindParam(':sifra');
$pokreni->bindParam(':admin');
    
$pokreni_izvrsavanje=$pokreni->execute();

if($pokreni_izvrsavanje){
    echo "<center>Podaci su promenjeni</center>";
}
else{
    echo "podaci nisu promenjeni";
}
$query="select * from korisnik LIMIT 4 ";
$prikaz=$konekcija->query($query);
foreach($prikaz as $data){
  echo "<center>";
  echo "<h2>Prikaz registrovanih korisnika<h2>";
  echo $data['id']."<br/>";
  echo $data['ime']."<br/>";
  echo $data['posta']."<br/>";
  echo "</label>Dali je administrator ako jeste onda 1</label>"."<br/>";
  echo $data['admin']."<br/>";
  echo "</center>";
}
}
?>
