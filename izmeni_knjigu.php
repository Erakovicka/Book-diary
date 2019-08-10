<!DOCTYPE html>
<html>
<head>
    <title>Izmena knjige</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='stylesheet' type="text/css" href="CSS/prikaz.css">
    <script
   src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"
   integrity="sha256-hwg4gsxgFZOsEEamdOYGBf13FyQuiTlAQgxVSNgt4="
   crossorigin="anonymus"></script>
</head>
<body>
    <?php
include "connect.php";

if (isset($_POST['unos'])){
    $id=$_POST['id'];
    $naziv=$_POST['naziv'];
    $zanr=$_POST['zanr'];
    $autor=$_POST['autor'];
    $izdavac=$_POST['izdavac'];
    $zanr_id=$_POST['zanr_id'];

$query="UPDATE knjiga SET id='". $id ."',naziv='". $naziv ."', zanr='" . $zanr . "', autor='" . $autor . "', izdavac='" . $izdavac . "', zanr_id='" . $zanr_id . "' WHERE id=". $id;
if ($conn->query($query)){
if ($conn->affected_rows > 0 ){
echo "<p>Knjiga je uspešno izmenjena.</p>";
} else {
echo "<p>Knjiga nije izmenjena.</p>";
}
} else {
echo "<p>Greška pri izmeni knjige</p>" . $conn->error;
}
} else {
echo " ";
}

?>
    <div class="prikaz">
<form method="post" action="">
           
            Broj:<input type="number" name="id"></br>
            Naziv : <input type="text" name="naziv"></br>
        Zanr: <input type="text" name="zanr"></br>
        Autor: <input type="text" name="autor"></br>
        Izdavac: <input type="text" name="izdavac"></br>
        Redni broj zanra: <input type="number" name="zanr_id"></br>

              
    <button type="submit" name="unos">Izmena</button>
	</form>
    </div>
</body>
</html>

