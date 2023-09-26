
include "dbconnect.php;
<?php
$query = "SELECT * from kurslar*";
$sonuc = mysqli_query($baglanti,$query);

while($row = mysqli_fetch_assoc($sonuc)){
    echo $row["id"]." ".$row["baslik"]." ".$row["aciklama"];
    echo "<br>";
}



mysqli_close($baglanti);
echo "mysql bağlantısı kapatıldı";

?>