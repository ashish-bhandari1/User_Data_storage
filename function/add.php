<?php

include 'define.php';
class customer
 {
    function __construct(  $phone,$address, $qty,$rate )
    {
        $conn = mysqli_connect("localhost","root","","ziyo");
        if(mysqli_connect_errno()){
            die("<br>Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
        }

        $sum = ($qty * $rate);
        $date = date("Y-m-d");


        $addQry = "INSERT INTO ".SUGER_DETAILS." VALUES  ('','$phone','$address', '$qty', '$rate','$sum', '$date')";
       


       $Result = $conn->query($addQry);


        if(!$Result){
            die("<br>Error 02: cannot connect to table <a href='#'>Report this error</a>");
        }
        else{
            echo '
            <script>
            alert("Success: Data added successfully");
            window.location = ("../index.php");
            </script>
                ';
        }


  mysqli_close($conn);

    }

}

class report{

    function viewReport($phone,$date )
    {
        $conn = mysqli_connect("localhost","root","","ziyo");
        if(mysqli_connect_errno()){
            die("<br>Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
        }
        
        $totalPruches = "SELECT SUM(amount) AS 'sumTotal' FROM customer_data WHERE mobile = '$phone' and date = '$date'";
        $totalQty = "SELECT SUM(qty) AS 'qtyTotal' FROM customer_data WHERE mobile = '$phone' and date = '$date'";
    
        
        $Tresult =  mysqli_query($conn, $totalPruches);
        $Tqty = $conn->query($totalQty);
    
        if(!$Tresult && !$Tqty){
            die("<br>Error 02: cannot connect to Table <a href='#'>Report this error</a>". mysqli_connect_error());
    
        }

        $data =mysqli_fetch_array($Tresult);
        $quantity = mysqli_fetch_array($Tqty);
        
        echo  "$".$data['sumTotal'];

    }
}

?>
