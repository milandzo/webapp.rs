<?php
define("BASE_PATH",true);
include "../konekcija.php";
if(isset($_POST['obrisi'])){
    $id=$_POST['id'];
    
    $obrisi="DELETE from korisnik where id=:id";
    $pokreni=$konekcija->prepare($obrisi);
    $izvrsavanje=$pokreni->execute(array(":id",$id));
    
    if($izvrsavanje){
        echo "Korisnik je obrisan";
    }else{
        echo "Korisnik nije obrisan";
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
<title>Izmena korisnika</title>
<center>
<h1>Izmena korisnika</h1>
<form method="post">
<label>Upisi broj korisnika</label><br/>
<input type="text" name="id" placeholder="Pronadji broj"><br/>
<button type="submit" name="obrisi">Izmena</button>

</center>
</form>
<a href="panel.php">Povratak na panel</a>
