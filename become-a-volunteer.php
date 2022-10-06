<?php

session_start();
// header specify the page 
$header = 'become_a_volunteer';
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
  <meta charset="utf-8" />
  <title>Become A Volunteer</title>
  <link rel="SHORTCUT ICON" href="mt-demo/79800/79832/mt-content/uploads/2019/04/favicon-1802.ico" type="image/vnd.microsoft.icon" />
  <meta property="og:title" content="Home" />
  <meta property="og:url" content="#" />
  <meta property="og:type" content="website" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="Blood Any Time logo/1.png">
  <link rel="stylesheet" href="mt-includes/css/assets.min.css" />
  <link rel="stylesheet" href="mt-demo/79800/79832/mt-content/assets/styles.css" id="moto-website-style" />
  <link rel="preload" as="font" type="font/woff2" crossorigin href="https://template79832.motopreview.com/mt-includes/fonts/fontawesome-webfont.woff2?v=4.7.0" />
  <link rel="stylesheet" href="mt-includes/css/assets.min.css?_build=1633339793" />
  <style>
    @import url(//fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic|Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic&subset=latin);
  </style>
  <link rel="stylesheet" href="mt-demo/79800/79832/mt-content/assets/styles.css?_build=1632936245" id="moto-website-style" />
  <link rel="stylesheet" href="src/css/styles.css">
  <script src="src/js/jquery.min.js" type="text/javascript"></script>
   <script src="src/js/script.js"></script>
</head>

<body class="moto-background moto-website_live">
  <div class="page" style="font-family: 'Poppins', sans-serif">
    <?php include_once 'component/header.php'; ?>

    <style>
      #vol-form,
      #vol-form>input {
        border: 2px solid rgb(218, 218, 218);
        border-radius: 5px;
      }
      .danger{
          color:red;
      }
      .success{
          color:green;
      }

      #vol-form {
        width: 70%;
        margin-left: 15%;
        margin-top: 50px;
        margin-bottom: 100px;
        display: flex;
        flex-direction: column;
        font-size: 20px;
        border-radius: 10px;
        padding: 30px;
        align-items: center;
      }

      #vol-form>label {
        font-size: 23px;
        margin-bottom: 15px;
        align-self: start;
        margin-left: 10%;
      }

      .inp-box {
        margin-bottom: 50px;
        width: 80%;
        padding-left: 1%;
        padding-top: 5px;
        padding-bottom: 5px;
      }

      #mainhead {
        width: 100%;
        text-align: center;
        font-size: 35px;
      }

      #submit-button {
        font-size: 25px;
        justify-content: center;
        width: 15%;
        background-color: #ee3d32;
        color: whitesmoke;
      }

      @media screen and (max-width: 1300px) {
        #submit-button {
          width: 30%;
        }
      }

      @media screen and (max-width: 650px) {
        #submit-button {
          width: 40%;
        }

        .inp-box {
          font-size: 20px;
        }
      }

      @media screen and (max-width: 440px) {
        #submit-button {
          width: 50%;
        }

        .inp-box {
          font-size: 15px;
        }
      }
    </style>

    <h1 id="mainhead">Register Here to Volunteer for the Cause</h1>

    <form id="vol-form" method="POST">
      <label for="name">Name</label>
      <input id="name" class="inp-box" type="text" name="name" required>
      <label for="phone">Phone No.</label>
      <input id="phone" class="inp-box" type="tel" name="phone" required>
      <label for="email">Email Address</label>
      <input id="email" class="inp-box" type="email" name="email" required>
      <label for="checkVerify">OTP</label>
      <a href="" id="resend" style="display:none;">resend OTP</a>
      <input id="checkVerify" class="inp-box" type="text" name="otp" required>
      <label for="state">State</label>
      <select name="state" id="state" class="inp-box" required>
        <option selected disabled>Select your state </option>
      </select>
      <label for="city">City</label>
      <select name="city" id="city" class="inp-box" required>
        <option selected disabled>Select your state </option>
      </select>
      <label for="addhar">Addhar Number</label>
      <input id="addhar" class="inp-box" type="text" name="addhar" required>
      <label for="dob">Date Of Birth</label>
      <input id="dob" class="inp-box" type="date" name="dob" style="color: rgb(155, 155, 155);" required>

      <input type="submit" id="submit-button" style="border: none; border-radius: 2px;">
      <div id="volunteer_message"></div>
    </form>

    <?php include_once 'component/footer.php'; ?>
    <div data-moto-back-to-top-button class="moto-back-to-top-button">
      <a ng-click="toTop($event)" class="moto-back-to-top-button-link">
        <span class="moto-back-to-top-button-icon fa"></span>
      </a>
    </div>
    <script src="mt-includes/js/website.assets.min.js?_build=1632918612" type="text/javascript" data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
      var websiteConfig = websiteConfig || {};
      websiteConfig.address = "https://template79832.motopreview.com/";
      websiteConfig.addressHash = "f73d5bf3fa0d37bb76bd79b197423702";
      websiteConfig.apiUrl = "/api.php";
      websiteConfig.preferredLocale = "en_US";
      websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(
        0,
        2
      );
      websiteConfig.back_to_top_button = {
        topOffset: 300,
        animationTime: 500,
        type: "theme",
      };
      websiteConfig.popup_preferences = {
        loading_error_message: "The content could not be loaded.",
      };
      websiteConfig.lazy_loading = {
        enabled: true
      };
      websiteConfig.cookie_notification = {
        enabled: false,
        content: '<p class="moto-text_normal">This website uses cookies to ensure you get the best experience on our website.<\/p>',
        content_hash: "6610aef7f7138423e25ee33c75f23279",
        controls: {
          visible: "close,accept",
          accept: {
            label: "Got it",
            preset: "default",
            size: "medium",
            cookie_lifetime: 365,
          },
        },
      };
      angular.module("website.plugins", []);
    </script>
    <script src="mt-includes/js/website.min.js?_build=1632918598" type="text/javascript" data-cfasync="false"></script>
    <script src="./src/js/jquery.min.js"></script>
      <script src="./config/api_url.js"></script>
      <script src="./ajax/b_location.js"></script>
      <script src="./ajax/b_volunteer.js"></script>
</body>

</html>