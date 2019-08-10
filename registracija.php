<!DOCTYPE html>
<html>
<head>
	<title>Korisnik</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/prikaz.css">
</head>
<body>
	<h1>Slanje upita</h1>
<?php
include "connect.php";

if (isset($_POST['unos'])){
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $telefon=$_POST['telefon'];
    $adresa=$_POST['adresa'];
    $sql=" INSERT INTO member(ime,prezime,email,password,username,telefon,adresa)VALUES('".$ime."','".$prezime."','".$email."','".$password."','".$username."','".$telefon."','".$adresa."')";
    if ($conn->query($sql)){
echo "<p>Uspešno ste se registrovali</p>";
} else {
echo "<p>Greška! Niste se registrovali</p>" . $conn->error;
}
} else {
//Ako POST parametri nisu prosleđeni
echo "";
}

?>
        <div class="prikaz">

	<form method="post" action="admin.php">
            Ime : <input type="text" name="ime"></br>
        Prezime: <input type="text" name="prezime"></br>
        Email: <input type="email" name="email"></br>
        Password: <input type="password" name="password"></br>
Username: <input type="text" name="username"></br>
Telefon: <input type="tel" name="telefon"></br>
Adresa:<input type="text" name="adresa"></br>
              
    <button type="submit" name="unos">Prijava</button>
	</form>
        </div> 
</body>
</html>


