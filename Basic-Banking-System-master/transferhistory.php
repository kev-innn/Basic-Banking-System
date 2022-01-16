<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="css/style.css" rel="stylesheet">
     <script type="text/javascript" src="corona.js"></script>
</head>

<body style="background-image:url('./img/history1.jpg'); background-repeat:no-repeat; background-position:center;background-size:cover;height: 680px; width:100%;">


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
                    <li class="breadcrumb-item active">Transaction history</li>
                </ol>
               <h3></h3>
               <hr>
            </div> 
        </div>

        
        <h2 class="text-center pt-4" style="color:black;font-style:italic;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Transfer History</h2>
        
       <br>
       
        <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered " style="color:#303C6C;background-color:#FCE181;">
        <thead class="thead-dark">
            <tr>
           
                <th class="text-center" style="color:#F3D250; background-color:#0b253e">SENDER</th>
                <th class="text-center" style="color:#F3D250; background-color:#0b253e">RECEIVER</th>
                <th class="text-center" style="color:#F3D250; background-color:#0b253e">AMOUNT</th>
                <th class="text-center" style="color:#F3D250; background-color:#0b253e">DATE & TIME</th>
            </tr>
        </thead><b>
        <tbody>
        <?php

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


            $sql ="select * from transfer_history";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
        
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            <td class="py-2"><?php echo $rows['date_time']; ?> </td>
            </tr>    
        <?php
            }

        ?></b>
        </tbody>
    </table>
            </div>
       </div>

       
</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>