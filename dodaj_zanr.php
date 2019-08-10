<!DOCTYPE html>
<html>
<head>
	<title>Zanrovi</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='stylesheet' type="text/css" href="CSS/prikaz.css">
</head>
<body>
<h1>Zanrovi</h1>

        
    <?php
include "connect.php";

if (isset($_POST['unos'])){
    $id=$_POST['id'];
    $zanr=$_POST['zanr'];

    
    
    $sql="INSERT INTO zanrovi(id,zanr)VALUES(NULL,'$zanr')";
    if ($conn->query($sql)){
echo "<p>Uspešno ste dodali zanr.</p>";
} else {
echo "<p>Greška! Niste dodali zanr.</p>" . $conn->error;
}
} else {
//Ako POST parametri nisu prosleđeni
echo "";
}

?>
	<div class="prikaz">
	<form method="post" action="">
            Broj:<input type="number" name="id"></br>
            Naziv zanra: <input type="text" name="zanr"></br>
        

              
    <button type="submit" name="unos">Dodaj zanr</button>
	</form>
        </div> 
</body>
</html>




