<?php
session_start();

if($_SESSION["status"] != true){

    header("Location: adminlogin.php");
}

$host = "localhost";
$dbusername = "id18399578_siddharth_database";
$dbpassword = "Sidpuhan@61884";
$dbname = "id18399578_rrr2";

$con=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$con) {
    echo "Connection Unsuccessful";
}

$query = "select * from signup";
$result = mysqli_query($con,$query);

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
        
        <?php
        if(isset($_POST['logout']))
        {
            session_destroy();
            header("location: adminlogin.php");
        }
        ?>

        <div>
            <ul id="navbar">
                <li><a class="active" href="adminindex.php">SignUp</a></li>
                <li><a href="adminportfolio.php">Portfolio</a></li>
                <li><a href="orderdetails.php">Order Details</a></li>
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
        <th>ID</th>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
        <th>Shipping Address</th>
        <th></th>
        <tr>
 
    <?php 
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>

             <tr class="tbody">
               <td><?php echo $rows['id']; ?></td>
               <td><?php echo $rows['name']; ?></td>
               <td><?php echo $rows['email']; ?></td>
               <td><?php echo $rows['phone']; ?></td>
               <td><?php echo $rows['addr']; ?></td>
               <td>
                   <form action="../signup.php" method="post" class="d-inline">
                        <button type="submit" name="delete" value="<?= $rows['id']; ?>" class="btn btn-danger">Delete</a>
                   </form>
               </td>
             </tr>
        <?php
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