<?php
define('BASE_PATH',true);
include "konekcija.php";
$query="select * from vesti";
$prikaz=$konekcija->query($query);
?>
<html>
<head>
<title>vesti</title>
  <link rel="stylesheet" href="stil.css">

</head>
<body>
<div id="telo">

<div id="vrh">
<img src="slike/vesti.jpg" width="100%" height="200px"/>
</div>
<div id="meni">
<a href="administracija/ulaz.php">Administracija</a><a href="">Ulaz za clanove</a>
</div>
</div>
</div>
<center>
<div id="prikaz">
<label>Izaberi Kategoriju vesti</label><br/>
<select name="vestikategorije" onchange="location=this.value;">
<option value="opstevesti.php" name="Opste">Opste vesti(sve)</option>
<option value="zemlje.php" name="zemlje">Vesti iz zemlje</option>
<option value="svet.php" name="svet">Vesti iz sveta</option>
</select> 
  </option>
</center>
<center>
<?php
foreach($prikaz as $data){

echo $data['naslov']."<br/>";
echo $data['vesti']."<br/>";
echo "<a href='dodajkomentar.php'>Dodaj komentar</a>";

}
?>
<?php
$query1="select * from komentar";
$prikaz1=$konekcija->query($query1);
foreach($prikaz1 as $data1){
  echo "<h2>Prikaz komentara<h2>";
  echo $data1['korisnik']."<br/>";
  echo $data1['komentar']."<br/>";
echo "<a href='dodajkomentar.php'>Dodaj komentar</a>";
}
?>
</center>

</div>
</div>

</body>

</html>