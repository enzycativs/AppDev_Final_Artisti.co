<?php

    session_start();

    include("connect.php");

    if(isset($_POST['submit']))
    {

       
        $emailAdd = $_POST['emailAdd'];
        $passWord = $_POST['passWord'];

        if(!empty($emailAdd) && !empty($passWord)){
          $query = "SELECT * FROM `register-details-customer` WHERE emailAdd = '$emailAdd' LIMIT 1";
          $result = mysqli_query($conn, $query);


          if($result){

              if($result && mysqli_num_rows($result) > 0){
                  $user_data = mysqli_fetch_assoc($result);

                  if($user_data["passWord"] == $passWord){
                      header("location: CustomerLandingPage.php");
                      die;

                  }
              }   
          }
          echo "<script> alert ('Incorrect Username/Email or Password');  </script>";
        }
        else{
          echo "<script> alert ('Incorrect Username/Email or Password');  </script>";
        }
    }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./LogIn.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Shrikhand:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work Sans:wght@500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="login">
      <div class="lowerframe1">
        <div class="lowerarea1">
          <div class="lowerarea-item"></div>
        </div>
        <div class="all-about-the-container1">
          <p class="all-about-the1">
            <span>All about the</span>
            <span class="span1"> </span>
          </p>
          <p class="all-about-the1">creativity</p>
        </div>
        <img class="socialicons1" alt="" src="./public/socialicons@2x.png" />

        <div class="privacy-policy1">Privacy Policy</div>
        <div class="terms-conditions1">Terms & Conditions</div>
      </div>
      <div class="middleframe1">
        <div class="middleframe-item"></div>
        <img class="image4-icon1" alt="" src="./public/image4@2x.png" />

        <div class="about3">
          This is an e-commerce platform for digital arts that will benefit
          those people who are having trouble finding an environment to showcase
          their work of art.
        </div>
        <div class="labelabout1">About</div>
        <div class="indicator1">|</div>
      </div>
      <div class="upperframe1">
        <img class="image1-icon1" alt="" src="./public/image1@2x.png" />

        <div class="redirectloginregister1">
          <div class="glowarea1"></div>
          <div class="shop-now1">Shop Now</div>
        </div>
        <b class="every-canvass-is1">Every canvass is treated special</b>
        <img class="image3-icon1" alt="" src="./public/image3@2x.png" />

        <div class="artistico3">Artisti.co</div>
        <img class="image2-icon1" alt="" src="./public/image2@2x.png" />

        <div class="artistico4">
          <div class="artistico5">Artisti.co</div>
        </div>
        <div class="about4" id="aboutContainer">
          <div class="about5">About</div>
        </div>
        <div class="register2" id="registerContainer">
          <div class="about5">Register</div>
        </div>
        <div class="log-in2" id="logInContainer">
          <div class="about5">Log In</div>
        </div>
      </div>
      <div class="sculptureframe1">
        <div class="sculpturebtn1">
          <div class="see-more-container3">
            <span class="see-more3">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="sculpture1">Sculpture</div>
        <img class="image6-icon1" alt="" src="./public/image6@2x.png" />
      </div>
      <div class="digitalframe1">
        <div class="digitalbtn1">
          <div class="see-more-container3">
            <span class="see-more3">See More </span>
            <b>&gt;</b>
          </div>
        </div>
        <div class="digital-art1">Digital Art</div>
        <img class="image7-icon1" alt="" src="./public/image7@2x.png" />
      </div>
      <div class="paintingframe1">
        <img class="image8-icon1" alt="" src="./public/image8@2x.png" />

        <div class="painting1">Painting</div>
        <div class="paintingbtn1">
          <div class="see-more-container3">
            <span class="see-more3">See More </span>
            <b>&gt;</b>
          </div>
        </div>
      </div>
      <div class="loginfrm" data-scroll-to="logInfrmContainer">
        <div class="loginregisterframe"></div>
        <div class="regslidersbtn" id="regSlidersbtnContainer">
          <div class="register4">Register</div>
        </div>

        <form action="LogIn.php" method="POST">


        <div class="logslidersbtn">
          <div class="log">Log In</div>
        </div>
        <div class="login1" id="logInContainer1">
          <button type="log" name="submit">Log In</button>
        </div>
        <div class="passwordframe">
          <input type="password" placeholder=" " required name="passWord">
          <div class="password">Password</div>
          <div class="passinput"></div>
        </div>
        <div class="usernameemailaddframe">
          <input type="email" placeholder=" " required name="emailAdd">
          <div class="username-email-address">Username/ Email Address</div>
          <div class="passinput"></div>
        </div>
        <div class="dont-have-an">Don’t have an account?</div>
        <div class="redirect-register" id="redirectRegisterText">Register</div>
        <div class="backbtn" id="backbtnText">back</div>
      </div>
    </div>
    </form>
    <script>
      var aboutContainer = document.getElementById("aboutContainer");
      if (aboutContainer) {
        aboutContainer.addEventListener("click", function () {
          var anchor = document.querySelector(
            "[data-scroll-to='middleFrameContainer']"
          );
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var registerContainer = document.getElementById("registerContainer");
      if (registerContainer) {
        registerContainer.addEventListener("click", function (e) {
          window.location.href = "./RegisterCustomer.php";
        });
      }
      
      var logInContainer = document.getElementById("logInContainer");
      if (logInContainer) {
        logInContainer.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='logInfrmContainer']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var regSlidersbtnContainer = document.getElementById("regSlidersbtnContainer");
      if (regSlidersbtnContainer) {
        regSlidersbtnContainer.addEventListener("click", function (e) {
          window.location.href = "./RegisterCustomer.php";
        });
      }
      
      /*var logInContainer1 = document.getElementById("logInContainer1");
      if (logInContainer1) {
        logInContainer1.addEventListener("click", function (e) {
          window.location.href = "./CustomerLandingPage.html";
        });
      }*/
      
      var redirectRegisterText = document.getElementById("redirectRegisterText");
      if (redirectRegisterText) {
        redirectRegisterText.addEventListener("click", function (e) {
          window.location.href = "./RegisterCustomer.php";
        });
      }
      var artisticoContainer = document.getElementById("artisticoContainer");
      if (artisticoContainer) {
        artisticoContainer.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }
      var backbtnText = document.getElementById("backbtnText");
      if (backbtnText) {
        backbtnText.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }
      </script>
      
  </body>
</html>
