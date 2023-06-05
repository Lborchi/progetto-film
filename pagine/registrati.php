<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $cognome = $_POST['cognome'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
}
$con = new mysqli("localhost","root","","utenti");
if (mysqli_connect_error()) {
echo("connessione non effettuata:" .mysqli_connect_error(). "<br>");
exit();
}

$myquery = "SELECT username   
FROM registrazione 
WHERE username='$username'";
    $ris = $con ->query($myquery) or die("<p>Query fallita!</p>");
    if ($ris->num_rows > 0) {
        echo "Username già in uso";
    } else {

$sql="INSERT INTO registrazione (nome, psw, cognome, username, email)
      VALUES('".$nome."','".$password."','".$cognome."','".$username."','".$email."');";
$ris = $con ->query($sql);
$con -> close();


header('location: index.php');
exit();
}
?>