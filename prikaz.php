<?php
   if(!require_once('../connect.php'))
   {
       die("Učitavanje fajla za konekciju nije uspeo");
   }

   $upit = "SELECT * FROM knjiga";
   $rezultat = $conn->query($upit);
?>
<!DOCTYPE html>
<html>
<head>
<title>Prikaz knjiga</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type="text/css" href="CSS/table.css">;
<script
   src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"
   integrity="sha256-hwg4gsxgFZOsEEamdOYGBf13FyQuiTlAQgxVSNgt4="
   crossorigin="anonymus"></script>
   <script>
      var id=$("#id").val();
      var naziv = $("#naziv").val();
var zanr = $("#zanr").val();
var autor = $("#autor").val();
var izdavac= $("#izdavac").val();
var zanr_id=$("#zanr_id").val();




if( id == '' || naziv == '' || zanr == ''|| autor==''== ''|| izdavac=='' == ''|| zanr_id=='')
{
// obavesti korisnika da popuni sva polja
}
else
{ 
// posalji podatke
}
 </script> 
   </head>
<body>
     <table>
               <tr>
                   <th>Broj</th>
                   <th>Naziv</th>
                   <th>Zanr</th>
                   <th>Autor</th>
                   <th>Izdavac</th>
                   <th>Redni broj zanra</th>
                   <th>Izmena</th>
                   <th>Brisanje</th>
               </tr>
           
               <?php while($red = $rezultat->fetch_assoc()) { ?>
                   <tr>
                       <td><?= $red['id']; ?></td>
                       <td><?= $red['naziv']; ?></td>
                       <td><?= $red['zanr']; ?></td>
                       <td><?= $red['autor']; ?></td>
                       <td><?= $red['izdavac']; ?></td>
                       <td><?= $red['zanr_id']; ?></td>
                       <td><a href="izmena_knjige.php">Izmena</a></td>
                       <td><a href="obrisi_knjigu.php">Brisanje</a></td>
                   </tr>
               <?php } ?>
          
         </table>
</body>
</html>