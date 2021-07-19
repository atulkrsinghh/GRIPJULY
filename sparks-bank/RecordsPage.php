<?php
$servername = "localhost:3306";
$username = "root"; 
$password = ""; 
$dbname = "spark_bank"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
$sql = "SELECT * FROM history" ;
$result = $conn->query($sql);
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    
        <style>
        html {
            position: relative;
            min-height: 50%;
        }
    body {
        
        margin:0;
            padding:0;
    font-size:20px;      
	background-image: url('bg1.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
              }
.container{      
            padding-top:3px;
            display: block;
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            width: 60%; 
            height:400px;
            background:black;
            color:white;
            opacity: 0.7;
        }
 body{
}
    </style>
</head>

<body>
  
  <?php include('navbar-1.php'); ?>
	<div class="container">
        <h2 style="text-align: center">Transaction History</h2>

       <br>
       <div>
    <table id = "Table">
        <thead>
            <tr>
                <th colspan=3>S.No.</th>
                <th colspan=3>Payer</th>
                <th colspan=3>Payer Acc ID</th>
                <th colspan=3>Payee</th>
                <th colspan=3>Payee Acc ID</th>
                <th colspan=3>Amount</th>
                <th colspan=3>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        
        <?php

    while($row = $result->fetch_assoc()) { 
  ?> 
 <tr>
        <td colspan=3><?php echo $row['sno']; ?></td>
        <td colspan=3><?php echo $row['payer']; ?></td>
        <td colspan=3><?php echo $row['payerAcc']; ?></td>
        <td colspan=3><?php echo $row['payee']; ?></td>
        <td colspan=3><?php echo $row['payeeAcc']; ?></td>
        <td colspan=3><?php echo $row['amount']; ?></td>
        <td colspan=3><?php echo $row['time']; ?></td>

     
        </tr>
 <?php
    }
  
$conn->close();
?> 
</
</table>
    </div>
</div>
<footer style="text-align: center">
    <p>Designed by: Atul Kumar Singh</p>
</footer>
<body>

</html>


