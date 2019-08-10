<!DOCTYPE html>
<html>
<head>
    <title>Izmena zanra</title>
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
    $zanr=$_POST['zanr'];
    

$query="UPDATE zanrovi SET id='". $id ."', zanr='" . $zanr . "' WHERE id=". $id;
if ($conn->query($query)){
if ($conn->affected_rows > 0 ){
echo "<p>Zanr je uspešno izmenjen.</p>";
} else {
echo "<p>Zanr nije izmenjen.</p>";
}
} else {
echo "<p>Greška pri izmeni zanra</p>" . $conn->error;
}
} else {
echo " ";
}

?>
    <div class="prikaz">
<form method="post" action="">
           
            Broj:<input type="number" name="id"></br>
        Zanr: <input type="text" name="zanr"></br>
       

              
    <button type="submit" name="unos">Izmena</button>
	</form>
    </div>
	
</body>
</html>