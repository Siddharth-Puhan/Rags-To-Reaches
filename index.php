<?php
session_start();

if($_SESSION["status"] != true){

    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rags-To-Reaches</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="header">
        <a href="#"><img src="img/RRR.png" class="logo" alt="Logo"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="cart/index.php">Shop</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li id="lg-bag"><a href="cart/mycart.php"><i class="far fa-shopping-bag"></i> </a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart/mycart.php"><i class="far fa-shopping-bag"></i> </a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Saving Earth is in fashion!</h4>
        <h2>Super Saver Deals</h2>
        <h1>On all products</h1>
        <p><b>Save more with coupons. Thrift Now!!!</b> </p>
        <button>Shop Now. Duh!</button>
    </section>

    <section id="feature" class="section-p1"> 
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Thrifting</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>Custom Designs</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Series - New Arrivals</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/f2.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/f3.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/f4.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/f5.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/f6.jpg" alt="First Product">
                <div class="des">
                    <span>New Arrival</span>
                    <h5>Half-n-Half Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹ 1099</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img/products/f7.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/f8.jpg" alt="First Product">
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
            </div>
        </div>
    </section>n 

    <section id="banner" class="section-m1">
        <h4>Custom Designs at your touch</h4>
        <h2>Up to <span>30% off</span> On our Newest Designs </h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Designs</h2>
        <p>Designs from our featured Designers</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/n2.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/n3.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/n4.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/n5.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/n6.jpg" alt="First Product">
                <div class="des">
                    <span>New Arrival</span>
                    <h5>Half-n-Half Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹ 1099</h4>
                </div>
            </div>

            <div class="pro">
                <img src="img/products/n7.jpg" alt="First Product">
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
            </div>

            <div class="pro">
                <img src="img/products/n8.jpg" alt="First Product">
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
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Get 25% off on first order</h2>
            <span>Share coupon and get additional discounts</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Creative Portfolios</h4>
            <h2>We have something for everyone!</h2>
            <span>Customise your clothes to newest trends</span>
            <button class="white">View Portfolio</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>Seasonal Sale</h2>
            <h3>winter Collection - 50% off!</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>Seasonal Sale</h2>
            <h3>winter Collection - 50% off!</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>Seasonal Sale</h2>
            <h3>winter Collection - 50% off!</h3>
        </div>
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