<?php
// Koneksii
include "koneksi.php";

//Take parameter from ajax
$stat =$_GET['stat'];
if($stat == 'ON'){
//Set data relay to 1
mysqli_query($conn,"UPDATE logs SET relay2=1");
mysqli_query($conn,"UPDATE logs SET relay3=1");
//Share response
echo "ON";
}
else{
    //Set data relay to 0
mysqli_query($conn,"UPDATE logs SET relay2=0");
mysqli_query($conn,"UPDATE logs SET relay3=0");
//Share response
echo "OFF";
}
?>