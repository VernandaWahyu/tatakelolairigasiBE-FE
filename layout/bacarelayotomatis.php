<?php
    include "koneksi.php";

    $query1="SELECT * FROM logs";		
    $result=mysqli_query($conn,$query1);
    $data= mysqli_fetch_array($result);
    $relayotomatis=$data['relayotomatis'];
    echo $relayotomatis;
?>
