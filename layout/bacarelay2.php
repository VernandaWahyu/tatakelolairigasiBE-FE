<?php
    include "koneksi.php";

    $query1="select * from logs ";		
	$result=mysqli_query($conn,$query1);
    $data= mysqli_fetch_array($result);
    $relay2=$data['relay2'];
    $relay3=$data['relay3'];
    echo $relay2;
    echo $relay3;
?>