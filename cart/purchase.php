<?php
session_start();
$con=mysqli_connect("localhost","id18399578_siddharth_database","Sidpuhan@61884","id18399578_rrr2");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
      $query1="INSERT INTO `order_manager`(`name`, `phone`, `addr`, `pay_mode`)
       VALUES ('$_POST[name]','$_POST[phone]','$_POST[addr]','$_POST[pay_mode]')";
       if(mysqli_query($con,$query1))
       {
            $Order_id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
                foreach ($_SESSION['cart'] as $key => $values) 
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }

                unset($_SESSION['cart']);
                echo "<script>
                alert('Order Placed');
                window.location.href='index.php';
                </script>";
            }
            else
            {
            echo "<script>
            alert('SQL Query Prepared Error');
            window.location.href='mycart.php';
            </script>";
            }
        }
       else
       {
        echo "<script>
          alert('SQL Error');
          window.location.href='mycart.php';
          </script>";
       }
    }
}

?>