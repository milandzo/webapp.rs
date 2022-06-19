<?php
//ADRESA DELJENA NA INTERNETU
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	$ipadresa=$_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	//ADRESA DELJENA POMOCU PROXY-JA
$ipadresa=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
	$ipadresa=$_SERVER['REMOTE_ADDR'];
}
echo $ipadresa;

?>