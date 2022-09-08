<?php
session_start();

$server = "localhost";
$user = "id18399578_siddharth_database";
$password = "Sidpuhan@61884";
$db = "id18399578_rrr2";

$con = mysqli_connect($server,$user,$password,$db);
if(!$con) {
    echo "Connection Unsuccessful";
}   

if(isset($_POST['delete'])){
    
    $customer_id = mysqli_real_escape_string($con, $_POST['delete']);
    $query = "DELETE FROM portfolio WHERE id='$customer_id'";
    $query_run = mysqli_query($con, $query);
    if(query_run){
             echo '<script>alert("Delete Successful!")</script>';
             echo '<script>window.location.href="../Admin/adminportfolio.php";</script>';  
     }
     else 
     {
         ?>
             <script>
                 alert("Delete Failed. Please try again.");
             </script>
          <?php   
     }
}


if(isset($_POST['edit'])){

     $customer_id = mysqli_real_escape_string($con, $_POST['customer_id']);
     $name = mysqli_real_escape_string($con, $_POST['name']);
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $message = mysqli_real_escape_string($con, $_POST['message']);
     $pname = mysqli_real_escape_string($con, $_POST['pname']);
     
     $query = "UPDATE portfolio SET name='$name', email='$email' , message='$message',
     pname='$pname' WHERE id='$customer_id' ";
     
     $query_run = mysqli_query($con, $query);
     if(query_run){
             echo '<script>alert("Edit Successful!")</script>';
             echo '<script>window.location.href="../Admin/adminportfolio.php";</script>';  
     }
     else 
     {
         ?>
             <script>
                 alert("Edit Failed. Please try again.");
             </script>
          <?php   
     }
     
}

if(isset($_POST['submit'])){

     $name = mysqli_real_escape_string($con, $_POST['name']);
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $message = mysqli_real_escape_string($con, $_POST['message']);
     $pname = mysqli_real_escape_string($con, $_POST['pname']);

     $emailquery = " select * from signup where email= '$email' ";
     $query = mysqli_query($con, $emailquery);

     $emailcount = mysqli_num_rows($query);

     if($emailcount<1) {
            echo '<script>alert("Please SignUp First !")</script>';
            echo '<script>window.location.href="../signup.php";</script>'; 
     }
    
     else {

             $insertquery = "insert into portfolio( name, email, message, pname) 
             values('$name','$email','$message', '$pname')";

             $iquery = mysqli_query($con, $insertquery);

             if($iquery){
                     echo '<script>alert("Your Message has been Sent!")</script>';
                     echo '<script>window.location.href="portfolio.php";</script>';  
             }
             else 
             {
                 ?>
                     <script>
                         alert("Contact failed. Please try again.");
                     </script>
                  <?php   
             }
         }
    
}

?>
  <!DOCTYPE html>
  <html>
  <title>David Warner</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../style.css">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  </style>
  <body class="w3-content" style="max-width:1600px">
  
  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:300px;   background: #e3e6f3;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="img/r1.jpeg" style="width:45%;" class="w3-round"><br><br>
      <h4><b>David Warner</b></h4>
    </div>
    <div class="w3-bar-block">
      <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
      <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-teal"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
      <a href="../portfolio.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-teal"><i class="fa fa-map-marker fa-fw w3-margin-right"></i>GO BACK</a>
      
    </div>
    <div class="w3-panel w3-large">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </nav>
  
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">
  
    <!-- Header -->
    <header id="portfolio">
      <a href="#"><img src="" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
      <div class="w3-container">
      <h1><b>My Portfolio</b></h1>
      </div>
    </header>


  
    <!-- First Photo Grid-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="img/p13.jpeg" alt="Norway" style="width:50%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Jumper</b></p>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="img/p14.jpeg" alt="Norway" style="width:72%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Crop Top</b></p>
        </div>
      </div>
      <div class="w3-third w3-container">
        <img src="img/p15.jpeg" alt="Norway" style="width:54%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>White Frock</b></p>
        </div>
      </div>
    </div>
    
    <!-- Second Photo Grid-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="img/p17.jpeg" alt="Norway" style="width:50%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Glittering one-peice</b></p>
          
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="img/p18.jpeg" alt="Norway" style="width:57%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Gown</b></p>
         
        </div>
      </div>
      <div class="w3-third w3-container">
        <img src="img/p16.jpeg" alt="Norway" style="width:53%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Indian One-Peice</b></p>
        </div>
      </div>
    </div>

  
    <!-- Images of Me -->
    <div class="w3-row-padding w3-padding-16" id="about">
      <div class="w3-col m6">
        <img src="img/r1.jpeg" alt="Me" style="width:30%">
      </div>
    </div>
  
    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
      <h4><b>About Me</b></h4>
      <p>Creative and passionate alterations tailor with 4 years of experience altering garments and designing and creating fashionable pieces for a variety of boutiques and shows. Skilled in garment construction and recording accurate measurements while using advanced sewing techniques and technology.</p>
      <hr>
      
      <h4>Technical Skills</h4>
      <!-- Progress bars / Skills -->
      <p>Stitching</p>
      <div style="background: #e3e6f3;">
        <div class="w3-container w3-padding w3-center" style="width:87%; background: #088178;">87%</div>
      </div>
      <p>Design</p>
      <div style="background: #e3e6f3;">
        <div class="w3-container w3-padding w3-center" style="width:85%; background: #088178;">85%</div>
      </div>
      <p>Quality</p>
      <div style="background: #e3e6f3;">
        <div class="w3-container w3-padding w3-center" style="width:95%; background: #088178;">95%</div>
      </div>
      <hr>
      
      <h4>How much I charge</h4>
      <!-- Pricing Tables -->
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-xlarge w3-padding-32" style="background: #e3e6f3;">Basic</li>
            <li class="w3-padding-16">Readymade</li>
            <li class="w3-padding-16">Limited Size Choice</li> 
            <li class="w3-padding-16">Good Fabric Used</li>
            <li class="w3-padding-16">Mail Support</li>
            <li class="w3-padding-16">
              <h2>₹30 - ₹80</h2>
              <span class="w3-opacity">per month</span>
            </li> 
          </ul>
        </div>
        
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-teal w3-xlarge w3-padding-32">Pro</li>
            <li class="w3-padding-16">Customization</li>
            <li class="w3-padding-16">Customized Size</li> 
            <li class="w3-padding-16">Price May Vary</li>
            <li class="w3-padding-16">Endless Support</li>
            <li class="w3-padding-16">
              <h2>₹250 - ₹400</h2>
              <span class="w3-opacity">per month</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Contact Section -->
    <div class="w3-container w3-padding-large">
      <h4 id="contact"><b>Contact Me</b></h4>
      <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
        <div class="w3-third w3-dark-grey">
          <p><i class="fa fa-envelope w3-xxlarge w3-text-white"></i></p>
          <p>warnerdavid@gmail.com</p>
        </div>
        <div class="w3-third w3-teal">
          <p><i class="fa fa-map-marker w3-xxlarge w3-text-white"></i></p>
          <p>India</p>
        </div>
        <div class="w3-third w3-dark-grey">
          <p><i class="fa fa-phone w3-xxlarge w3-text-white"></i></p>
          <p>9876543021</p>
        </div>
      </div>
      <hr class="w3-opacity">
      <form action="portfolio.php" method="post">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="name" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="message" required>
        </div>
        <input type="text" value="David Warner" name="pname" hidden>
        <button type="submit" name="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Submit</button>
      </form>
    </div>
  </script>
  
  </body>
  </html>
  
</body>
</html>