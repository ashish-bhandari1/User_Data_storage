<?php
include 'add.php';

$conn = mysqli_connect("localhost","root","","ziyo");

if(!$conn){
    die("<br>Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
}

$phone = mysqli_real_escape_string($conn,$_POST["phone"]);//using mysqli realscape string to store important data more securely
$qty =  mysqli_real_escape_string($conn, $_POST["qty"]);
$rate =  mysqli_real_escape_string($conn, $_POST["rate"]);
$address =  mysqli_real_escape_string($conn, $_POST["address"]);

//calling constructor

$obj = new customer( $phone, $address, $qty,$rate);
//  $obj = new report();
 
?>