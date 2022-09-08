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
    <title>Edit</title>
    <link rel="stylesheet" href="../logincss.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div style="width: 580px;
    height: 350px;
    margin: 10px 405px;
    background-color: rgb(255, 255, 255);
    border-radius: 3px;">
        
        <?php
        if(isset($_GET['id']))
        {
            $customer_id = mysqli_real_escape_string($con, $_GET['id']);
            $query = "SELECT * FROM portfolio where id='$customer_id'";
            $query_run = mysqli_query($con, $query);
            
            if(mysqli_num_rows($query_run) > 0)
            {
                $customer = mysqli_fetch_array($query_run);
                ?>
                
                 <form class="signup" action="../Portfolio/portfolio.php" method="post">
                    <input type="hidden" name="customer_id" value="<?= $customer['id'];?>">
                    
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $customer['name'];?>" id="name" placeholder="Name" />
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $customer['email'];?>" id="email" placeholder="Email" />
                    <label>Message</label>
                    <input type="text" name="message" value="<?= $customer['message'];?>" id="message" placeholder="Message" />
                    <label>Artisan Name</label>
                    <input type="text" name="pname" value="<?= $customer['pname'];?>" id="pname" placeholder="" />
                    <div style="text-align: center;">
                        <button name="edit" id="submit">Edit</button>
                    </div>
                  </form>
  
                <?php
            }
            else
            {
                echo "<h4>No records found</h4>";
            }
        }
        ?>
     </body>
</html>