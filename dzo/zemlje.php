
<?php
define("BASE_PATH",true);
include "konekcija.php";
$query="select * from zemlja";
    $prikaz=$konekcija->query($query);
foreach($prikaz as $data){
    
echo $data['naslov']."<br/>";
echo $data['vesti']."<br/>";
echo "<a href='dodajkomentar.php'>Dodaj komentar</a>";

}
?>