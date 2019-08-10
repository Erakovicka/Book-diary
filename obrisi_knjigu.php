<?php

include "connect.php";
if ( isset ($_POST['unos'])){
$id = $_POST['id'];

$query = "DELETE  FROM knjiga WHERE id = ".$id;
if (!$q=$conn->query($query)){
echo "<br>Greska. Upit nije izvrsen<br/>" . $conn->error;
die();
} else {
echo "<p>Knjiga je uspešno obrisana!</p>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Brisanje knjige</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel='stylesheet' type="text/css" href="CSS/prikaz.css">
    <script
   src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"
   integrity="sha256-hwg4gsxgFZOsEEamdOYGBf13FyQuiTlAQgxVSNgt4="
   crossorigin="anonymus"></script>
</head>
<body>
    <div class="prikaz">
<form method="post" action="">
            Broj:<input type="number" name="id"></br>
            
            <button type="submit" name="unos">Brisanje</button>
	</form>
    </div>
</body>
</html>
