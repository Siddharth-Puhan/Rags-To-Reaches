<?php
session_start();

$host = "localhost";
$dbusername = "id18399578_siddharth_database";
$dbpassword = "Sidpuhan@61884";
$dbname = "id18399578_rrr2";

$con=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$con) {
    echo "Connection Unsuccessful";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rags-To-Reaches</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="../style.css">
</head>
<body>

    <section id="header">
        <a href="#"><img src="../img/RRR.png" class="logo" alt="Logo"></a>
        
        

        <div>
            <ul id="navbar">
                <li><a href="adminindex.php">SignUp</a></li>
                <li><a href="adminportfolio.php">Portfolio</a></li>
                <li><a class="active" href="orderdetails.php">Order Details</a></li>
                <li><a href="../index.php">Home</a></li>
                <li><form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <button class="normal" type="submit" name="logout">Log Out</button>
                </form></li>
            </ul>
        </div>
    </section>
<br>
    <section id="signup">
    <table class="table  table-group-divider">
        <tr style="background: #e3e6f3;">
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Pay Mode</th>
        <th>Orders</th>
        <tr>
 
        <?php 
            $query="SELECT * FROM `order_manager`";
            $user_result=mysqli_query($con,$query);
            while($user_fetch=mysqli_fetch_assoc($user_result))
            {
                echo"
                    <tr class='tbody'>
                        <td>$user_fetch[order_id]</td>
                        <td>$user_fetch[name]</td>
                        <td>$user_fetch[phone]</td>
                        <td>$user_fetch[addr]</td>
                        <td>$user_fetch[pay_mode]</td>
                        <td>
                         <table class='table text-center'>
                         <thead>
                           <tr>
                             <th scope='col'>Item Name</th>
                             <th scope='col'>Price</th>
                             <th scope='col'>Quantity</th>
                           </tr>
                         </thead>
                         <tbody>
                         ";

                    $order_query="SELECT * FROM `user_orders` WHERE `Order_id`='$user_fetch[order_id]'";
                    $order_result=mysqli_query($con,$order_query);
                    while($order_fetch=mysqli_fetch_assoc( $order_result))
                    {
                        echo"
                        <tr>
                            <td>$order_fetch[Item_Name]</td>
                            <td>$order_fetch[Price]</td>
                            <td>$order_fetch[Quantity]</td>
                        </tr>
                        ";
                    }
                    echo"

                           </tbody>
                          </table> 
                        </td>
                    </tr>
                ";
            }
                
         ?>
       
     </table>
     <hr style="background: #e3e6f3; height: 2px;" >
    </section>

    <footer class="section-p1">
        <div class="col">
            <img src="img/RRR.png" class="logo" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Kumarswamy Layout</p>
            <p><strong>Phone: </strong> 9004329983</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Blog</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Log Out</a>
            <a href="#">View Profile</a>
            <a href="#">View Cart</a>
            <a href="#">Help</a>
        </div>
        <div class="copyright">
            <p>&copy; Copyright 2022 Rags-To-Reaches</p>
        </div>
    </footer>
</body>
</html>