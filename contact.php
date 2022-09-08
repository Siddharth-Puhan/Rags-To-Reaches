<?php
session_start();

$con=mysqli_connect("localhost","id18399578_siddharth_database","Sidpuhan@61884","id18399578_rrr2");
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="header">
        <a href="#"><img src="img/RRR.png" class="logo" alt="Logo"></a>

        <div>
            <ul id="navbar">
            <li><a href="index.php">Home</a></li>
                <li><a href="cart/index.php">Shop</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
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
  
    <section id="page-header1" class="about-header">

        <h2>#letsTalk</h2>

        <p>Feedbacks or Complains, We're all ears</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Get In Touch</span>
            <h2>Visit any of our socials</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Kumarswamy Layout</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>ragstoreaches@gmail.com </p>
                </li>
                <li>
                    <i class="fas fa-user-circle"></i>
                    <p>@ragstoreaches</p>
                </li>
                <li>
                    <i class="fas fa-camera"></i>
                    <p>@rags_to_reaches</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62225.176052942414!2d77.52799512276253!3d12.902995081952332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3fd8bd62431f%3A0x98cb23be33255019!2sKumaraswamy%20Layout%2C%20Bengaluru%2C%20Karnataka%20560078!5e0!3m2!1sen!2sin!4v1659246896811!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="email-script.php" method="post">
            <span>LEAVE A MESSAGE</span>
            <h2>We would love to hear from you</h2>
            <input type="text" name="name" id="name" placeholder="Your Name">
            <input type="text" name="fromEmail" id="fromEmail" value="sidpuhan@gmail.com" placeholder="e-mail" hidden>
            <input type="text" name="toEmail" id="toEmail" placeholder="e-mail">
            <input type="text" name="subject"  id="subject" placeholder="Subject">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message">
            </textarea>
            <button class="normal" name="sendMailBtn">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br> Phone: +000 123 000 77 88
                 <br> e-mail: johndoe123@gmail.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>William Smith</span> Senior Marketing Manager <br> Phone: +000 123 000 77 88
                 <br> e-mail: smithwill@gmail.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br> Phone: +000 123 000 77 88
                 <br> e-mail: emmastone@gmail.com</p>
            </div>
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