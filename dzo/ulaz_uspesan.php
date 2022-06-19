<?php
session_start();
if(isset($_SESSION['ime'])){
	echo "<label>Uspesno ste se ulogovali ovo je odeljak za prijavljene korisnike dobro dosli</label>"."<br/>".$_SESSION['ime']."<br/>";
	echo "<a href='odjavise.php'>Odjavite se ovde</a><br/>";
    echo "<a href='vesti.php'>Kliknite za vesti na ovom linku</a>";
}
?>