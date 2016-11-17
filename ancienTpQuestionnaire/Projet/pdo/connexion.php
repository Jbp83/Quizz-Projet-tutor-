<?php
session_start(); // create session
$nom = $_POST['nom'];
$_SESSION['nom'] = $nom;
setcookie('nom', $nom, time() + 365*24*3600, null, null, false, true);

/*
if (empty($nom)  
{  
	echo "le pseudo et le mot de passe doivent être forcement saisis";  
}
*/
ini_set("display_errors","on");
$login=$_POST['nom'];
$link = mysqli_connect("localhost","root","","projet2");
if(!$link) die('Erreur de connexion');	
$sql = "SELECT nom FROM utilisateur WHERE nom = '$login'";
$result = mysqli_query($link,$sql);
$num_rows = mysqli_num_rows($result);
echo ($num_rows);
if($num_rows == 1){
	header('Location: quest.php');
	$_SESSION['identifiant'] = $login;
	$_SESSION['connecte'] = true;
}
else header('Location: page.html');
mysqli_close($link);
?>