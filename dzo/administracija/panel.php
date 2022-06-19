<html>
<head><title>Administracija</title>
<link rel="stylesheet" href="../stil.css" type="text/css"/>
</head>
<body>
<?php
include "vrh.php";
?>
</div>
<center>
<div id="prikaz">
<h2>Dodavanje sa administracionog panela</h2>
<div id="dodajvesti">
<a href="dodajvesti.php">Dodaj vesti</a><br/>
<a href="dodajkorsnika.php">Dodaj korisnika</a><br/>
<a href="dodavanjekomentara.php">Dodavanje komentara</a><br/>
<!---- izmena korisnika ---->
<label>Izmena:</label><br/>
<a href="izmenakorisnika.php">izmenikorisnika </a><br/>
<!--- obrisi korisnika---->
<a href="obrisikorisnika.php">obrisikorisnika</a><br/>
</div>
<?php
$query="select * from korisnik LIMIT 1";
$prikaz=$konekcija->query($query);
foreach($prikaz as $data){
  echo "<h2>Prikaz zadnjeg registrovanog korisnika<h2>";
  echo $data['ime']."<br/>";
  echo $data['posta']."<br/>";
  echo "</label>Dali je administrator ako jeste onda 1</label>"."<br/>";
  echo $data['admin']."<br/>";

}
?>
</center>
</body>
</html>