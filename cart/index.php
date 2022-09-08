<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rags-To-Reaches</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../style.css">
</head>
<body>

  <section id="header">
        <a href="#"><img src="../img/RRR.png" class="logo" alt="Logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a  class="active" href="index.php">Shop</a></li>
                <li><a href="../portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                ?>
                <li id="lg-bag"><a href="mycart.php"><i class="far fa-shopping-bag">(<?php echo $count; ?>)</i> </a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <?php
              $count=0;
              if(isset($_SESSION['cart']))
              {
                $count=count($_SESSION['cart']);
              }
            ?>
            <a href="mycart.php"><i class="far fa-shopping-bag">(<?php echo $count; ?>)</i> </a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
  </section>

    <section id="page-header">
        <h2>#UpcycleThenRecycle</h2>
        <p><b>Save more with coupons. Thrift Now!!!</b> </p>
    </section>

    <section id="product1" class="section-p1">
       <div class="pro-container">

                <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                        <img src="../img/products/f1.jpg" alt="First Product">
                        <div class="des">
                            <span>New Arrival</span>
                            <h5>Astronaut Shirt</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹ 700</h4>
                        </div>
                        <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                        <input type="hidden" name="Item_Name" value="Product 1">
                        <input type="hidden" name="Price" value="700">
                  </form>
                </div>
           

                <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                        <img src="../img/products/f2.jpg" alt="First Product">
                        <div class="des">
                            <span>New Arrival</span>
                            <h5>Autumn Leaf Shirt</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>₹ 800</h4>
                        </div>
                        <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                        <input type="hidden" name="Item_Name" value="Product 2">
                        <input type="hidden" name="Price" value="800">
                    </form>
                </div>
           
           
                <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/f3.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Willow Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 850</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 3">
                    <input type="hidden" name="Price" value="850">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/f4.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Spring Blossom Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 999</h4>
                   </div>
                   <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                   <input type="hidden" name="Item_Name" value="Product 4">
                   <input type="hidden" name="Price" value="999">
                   </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/f5.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Thrifted - Night Blossom</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 799</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 5">
                    <input type="hidden" name="Price" value="799">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n4.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Spring Blossom Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 999</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 6">
                    <input type="hidden" name="Price" value="999">
                    </form>
                </div>



                <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/f8.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Heiroglyphs Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 659</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 7">
                    <input type="hidden" name="Price" value="659">
                    </form>
                </div>

                <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/f6.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Half-n-Half Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 1099</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 8">
                    <input type="hidden" name="Price" value="1099">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/f7.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Cotton Bottoms</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 1299</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 9">
                    <input type="hidden" name="Price" value="1299">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n1.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Astronaut Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 700</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 10">
                    <input type="hidden" name="Price" value="700">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n2.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Autumn Leaf Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 800</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 11">
                    <input type="hidden" name="Price" value="800">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n3.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Willow Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 850</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 12">
                    <input type="hidden" name="Price" value="850">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n5.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Thrifted - Night Blossom</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 799</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 13">
                    <input type="hidden" name="Price" value="799">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n6.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Half-n-Half Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 1099</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 14">
                    <input type="hidden" name="Price" value="1099">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n7.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Cotton Bottoms</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 1299</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 15">
                    <input type="hidden" name="Price" value="1299">
                    </form>
                </div>

            <div class="pro" >
                  <form action="manage_cart.php" method="POST">
                    <img src="../img/products/n8.jpg" alt="First Product">
                    <div class="des">
                        <span>New Arrival</span>
                        <h5>Heiroglyphs Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₹ 659</h4>
                    </div>
                    <button type="submit" name="Add_To_Cart"><a href="#"><i class="fal fa-shopping-cart cart"></i></a></button>
                    <input type="hidden" name="Item_Name" value="Product 16">
                    <input type="hidden" name="Price" value="659">
                    </form>
                </div>

        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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
 




    <script src="script.js"></script>
</body>
</html>