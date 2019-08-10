<?php
   if(!require_once('../connect.php'))
   {
       die("Učitavanje fajla za konekciju nije uspeo");
   }

   $upit = "SELECT * FROM zanrovi";
   $rezultat = $conn->query($upit);
?>
<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Prikaz zanrova</title>";
echo "<meta charset='utf8' />";
echo "<link rel='stylesheet' type='text/css' href='CSS/table.css'>";
echo "<script
   src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'
   integrity='sha256-hwg4gsxgFZOsEEamdOYGBf13FyQuiTlAQgxVSNgt4='
   crossorigin='anonymus'>"; echo "</script>";
   
    echo "</head>";
 echo "<body>";
 echo "<div class='table'>"; 
      echo "<table>";
      echo    "<tr>";
                 echo   "<th>Broj</th>";
                  echo  "<th>Zanr</th>";
                   echo "<th>Izmena</th>";
                  echo  "<th>Brisanje</th>";
              echo  "</tr>";
           ?>
               <?php while($red = $rezultat->fetch_assoc()) { ?>
                   <tr>
                       <td><?= $red['id']; ?></td>
                       <td><?= $red['zanr']; ?></td>
                       <td><a href="izmeni_zanr.php">Izmena</a></td>
                       <td><a href="obrisi_zanr.php">Brisanje</a></td>
                   </tr>
               <?php } ?>
          <?php
           echo  "</table>";
           echo "</div>";
 echo "</body>";
 echo "</html>";
?>