<?php
    $conn = mysqli_connect("localhost","root","","ziyo");
	if(mysqli_connect_errno()){
		die("<br>Error 01: cannot connect to Database <a href='#'>Report this error</a>". mysqli_connect_error());
    }
    

	$phone = "9869213908";
    $date =  mysqli_real_escape_string($conn, $_POST["date"]);

    echo $date;
	$totalPruches = "SELECT SUM(amount) AS 'sumTotal' FROM customer_data WHERE phone = '$phone' and date = '$date'";
	$totalQty = "SELECT SUM(qty) AS 'qtyTotal' FROM customer_data WHERE phone = '$phone' and date = '$date'";

	
	$Tresult =  mysqli_query($conn, $totalPruches);
	$Tqty = $conn->query($totalQty);

	if(!$Tresult && !$Tqty){
		die("<br>Error 02: cannot connect to Table <a href='#'>Report this error</a>". mysqli_connect_error());

	}
	$data =mysqli_fetch_array($Tresult);
	$quantity = mysqli_fetch_array($Tqty);
	

?>


            <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Table </title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="dataWrapper container">
        <h4>Total purches made by <?php echo $phone; ?> in <?php echo $date; ?></h4>

            <table class="table ">
                <thead class="thead-light">
                    <tr>
                        <th> Phone </th>
                        <th> Total number of items</th>
                        <th>Total purches made</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo  $quantity['qtyTotal']; ?> </td>
                        <td><?php echo  "$".$data['sumTotal']; ?> </td>
                    </tr>
                    <tr>
                       
                    </tr>
                </tbody>
			</table>
			

    
		</div>
		
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./script.js"></script>

	

</body>

</html>