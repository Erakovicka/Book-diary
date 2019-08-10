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
   
<!DOCTYPE html>

<html>

<head>

<title>Prijava</title>
<link rel="stylesheet" type="text/css" href="CSS/prikaz.css">
<script

src=""

integrity="sha256-hwg4gsxgFZOsEEamdOYGBf13FyQuiTlAQgxVSNgt4="

crossorigin="anonymus"></script>

</head>

<body>
    <div class="prikaz">
	<h1>Prijava</h1>
        <p>Nakon registracije,prijavite se i pocnite <br>
        da koristite vas BOOK DIARY!</p>
	<hr/>

    <form action="panel.php" method="post">

        Username: <input type="text" name="username"></br>

        Password: <input type="password" name="password"></br>

<button type="submit" name="login">Uloguj se</button>

</form>
    </div>
</body>

</html> 