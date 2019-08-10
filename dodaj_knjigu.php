<!DOCTYPE html>
<html>
<head>
	<title>Korisnik</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel='stylesheet' type="text/css" href="CSS/prikaz.css">
</head>
<body>
<h1>Knjiga</h1>

        <div class="prikaz">
    <?php
include "connect.php";

if (isset($_POST['unos'])){
    $id=$_POST['id'];
    $naziv=$_POST['naziv'];
    $zanr=$_POST['zanr'];
    $autor=$_POST['autor'];
    $izdavac=$_POST['izdavac'];
    $zanr_id=$_POST['zanr_id'];
    
    
    $sql="INSERT INTO knjiga(id,naziv,zanr,autor,izdavac,zanr_id)VALUES(NULL,'$naziv','$zanr','$autor','$izdavac','$zanr_id')";
    if ($conn->query($sql)){
echo "<p>Uspešno ste dodali knjigu.</p>";
} else {
echo "<p>Greška! Niste dodali knjigu.</p>" . $conn->error;
}
} else {
//Ako POST parametri nisu prosleđeni
echo "";
}

?>
	
	<form method="post" action="">
            Broj:<input type="number" name="id"></br>
            Naziv : <input type="text" name="naziv"></br>
        Zanr: <input type="text" name="zanr"></br>
        Autor: <input type="text" name="autor"></br>
        Izdavac: <input type="text" name="izdavac"></br>
        Redni broj zanra: <input type="number" name="zanr_id"></br>

              
    <button type="submit" name="unos">Prijava</button>
	</form>
        </div> 
</body>
</html>



