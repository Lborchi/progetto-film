<?php
session_start();
global  $username;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$_SESSION["username"]=$username;


$con = new mysqli ("localhost","root","","utenti");
if (mysqli_connect_error()) {
echo("connessione non effettuata:" .mysqli_connect_error(). "<br>");
exit();
}

$sql="SELECT username,psw from registrazione where username='".$username."' and psw='".$password."';";

$ris=$con ->query($sql);

if ($ris->num_rows ===0)
{
  echo ("utente non trovato");
} else{

header('location: index.php');
}
$con -> close();

?>

