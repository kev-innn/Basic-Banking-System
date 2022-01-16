<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript" src="corona.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
  
    <body style="background-color:black; background-size: 100% 130%;font-size:100%;">
  
    <div id="mySidenav" class="sidenav">
    
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.html">HOME</a>
      <a href="./viewcustomers.php">VIEW ALL CUSTOMERS</a>
      <a href="./transferhistory.php">TRANSFER HISTORY </a>
      <a href="contactus.html">CONTACT US  </a>
    </div>
    
    <span style="font-family: 'Times New Roman', Times, serif;font-size:30px;cursor:pointer;color:  #f7a000;" onclick="openNav()">&#9776; THE ABCD BANK</span>
    
    <hr>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="col-12 breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active">View all Customers</li>
                </ol>
               <h3></h3>
               <hr>
            </div> 
        </div>
       
       
<?php
{
$host='localhost';
$username='root';
$password='';
$dbname='bankingsystem';

// Create connection
$conn = mysqli_connect($host, $username ,$password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed:".mysqli_connect_error());
}

$sql = "SELECT * FROM customers";
$result = mysqli_query($conn,$sql);

echo "<table border='2' class='table table-dark table-hover table-striped'>
<tr>
<th>Account Number</th>
<th>Name</th>
<th>Emailid</th>
<th>Phone Number</th>
<th>City</th>
<th>State</th>
<th>Balance</th>
<th>Transaction</th>
</tr>";

for (;$row=mysqli_fetch_assoc($result);)
{ 
    echo "<tr>";
    echo "<td>" . $row['acc']. "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['emailid'] . "</td>";
    echo "<td>" . $row['mobilenumber']. "</td>";
    echo "<td>" . $row['city']. "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "<td>" . $row['balance']. "</td>";
    echo "<td>" ?><a href='http://localhost/Basic-Banking-System-master/transfer.php? acc= <?php echo $row['acc'] ;?>'>  <button type="button" class="btn btn-danger btn-sm' data-toggle='button">Click here to transfer</button></a>
    <?php
    echo"</td>";
    echo "</tr>";
} 
echo "</table>";

mysqli_close($conn);
}
?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>