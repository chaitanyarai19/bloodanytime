<?php
session_start();
if (isset($_SESSION['hospital_id'])) {
  header("location: prescription.php");
}
// header specify the page 
$header = 'hospital';
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
  <meta charset="utf-8" />
  <title>Bloodanytime | Donor Registration</title>
  <link rel="SHORTCUT ICON" href="mt-demo/79800/79832/mt-content/uploads/2019/04/favicon-1802.ico?_build=1635952195" type="image/vnd.microsoft.icon" />
  <link rel="canonical" href="https://template79832.motopreview.com/appointment/" />
  <meta property="og:title" content="Donor Registeration" />
  <meta property="og:url" content="https://template79832.motopreview.com/appointment/" />
  <meta property="og:type" content="website" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="Blood Any Time logo/1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Font-->
  <link rel="stylesheet" type="text/css" href="mt-includes/hos_css/opensans-font.css">
  <link rel="stylesheet" type="text/css" href="mt-includes/hos_fonts/line-awesome/css/line-awesome.min.css">
  <!-- Jquery -->
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
  <!-- Main Style Css -->
  <link rel="stylesheet" href="mt-includes/hos_css/style.css" />

  <link rel="preload" as="font" type="font/woff2" crossorigin href="https://template79832.motopreview.com/mt-includes/fonts/fontawesome-webfont.woff2?v=4.7.0" />
  <link rel="stylesheet" href="mt-includes/css/assets.min.css?_build=1633339793" />
  <style>
    @import url(//fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic|Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic&subset=latin);
  </style>
  <link rel="stylesheet" href="mt-demo/79800/79832/mt-content/assets/styles.css?_build=1632936245" id="moto-website-style" />
  <link rel="stylesheet" href="src/css/styles.css">
   <script src="src/js/jquery.min.js" type="text/javascript"></script>
   <script src="src/js/script.js"></script>
   
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7768195495845816"
     crossorigin="anonymous"></script>
</head>

<body class="moto-background moto-website_live">
  <div class="page">
    <?php include_once 'component/header.php'; ?>
    <section id="section-content" class="content page-12 moto-section" data-widget="section" data-container="section">
      <div class="moto-widget moto-widget-block moto-bg-color_custom4 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="
            background-image: url(mt-demo/79800/79832/mt-content/uploads/2019/04/mt-1802-content-bg05.jpg);
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
          " data-bg-image="2019/04/mt-1802-content-bg05.jpg" data-bg-position="top">
        <div class="container-fluid">
          <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
              <div class="moto-widget moto-widget-row row-fixed moto-justify-content_center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
                <div class="container-fluid">
                  <div class="row" data-container="container">
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                      <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
                        <div class="moto-widget-text-content moto-widget-text-editable">
                          <h1 class="moto-text_system_5">
                            Hospital Registration
                          </h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
      <div class="page-content">
        <div class="form-v4-content">
          <div class="form-left">
            <h2>Terms and Conditions</h2>

            <li> This website is developed keeping all the necessary points related to user convenience and ease. </li>
            <br>
            <li>This website is secured and keeps all your data and information safe. </li><br>
            <li> This website is linked to different hospitals and various donors , hence do not involve any kind of
              amalgamation and maintains complete transparency. </li><br>
            <li> This website act as an interface between the two, it has nothing to do with receiver and donor end
              individually. </li><br>
            <li> This site is just to help and avail various hospitals with as many donors as possible. </li><br>
            <li><b>If in case any miscommunication happens between both the parties this website and Its member are not
                liable for it.</b></li><br>
            <li> Any donor making registration on this website is himself answerable and responsible for any kind of
              commitment done to receiver end. </li><br>
            <li>The hospitals working in partnership with this site shouldn't be dependable on any kind of move as this
              site doesn't promises anything ,it's just a mode of communication. </li><br>
          </div>
          <form class="form-detail" method="POST" id="hospital_registration">
            <h2>REGISTRATION FORM</h2>
            <div class="form-row">
              <label for="hospital_name">Hospital Name</label>
              <input type="text" class="form-control input-text" name="hospital_name" id="hospital_name" required>
            </div>
            <div class="form-row">
              <label for="hospital_id">Hospital ID</label>
              <input type="text" class="form-control input-text" name="hospital_id" id="hospital_id" required>
            </div>
            <div class="form-row">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control input-text" name="phone" id="phone" required>
            </div>
            <div class="form-row">
              <label for="your_email">Your Email</label>
              <input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
            </div>
            <div class="form-row" id="otp">
              <label for="phone">OTP</label>
              <a href="" id="resend" style="display:none;">resend OTP</a>
              <input type="text" class="form-control input-text" id="checkVerify" required>
            </div>
            <div class="form-row mb-5">
              <label for="state">State</label>
              <select name="state" id="state" class="form-control form-control-lg">
                <option selected disabled>Select your state</option>
              </select>
            </div>
            <div class="form-row mb-5">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control form-control-lg">
                <option selected disabled>Select your city</option>
              </select>
            </div>
            <div class="form-checkbox">
              <label class="container">
                <input type="checkbox" name="checkbox" value="yes" required>
                <span class="checkmark"></span>
                <p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
              </label>
            </div>
            <div class="form-row-last">
              <input type="submit" name="register" class="register" value="Register" disabled>
            </div>
            <a href="hospital_login.php">Already Have an account? LOGIN</a>
            <div id="hospital_registration_message"></div>
          </form>
        </div>
      </div>
    </section>
  </div>
  
  
  <?php include_once 'component/footer.php'; ?>
  <div data-moto-back-to-top-button class="moto-back-to-top-button">
    <a ng-click="toTop($event)" class="moto-back-to-top-button-link">
      <span class="moto-back-to-top-button-icon fa"></span>
    </a>
  </div>
  <script src="mt-includes/js/website.assets.min.js?_build=1632918612" type="text/javascript" data-cfasync="false"></script>
  <script src="mt-includes/js/website.assets.min.js?_build=1632918612" type="text/javascript" data-cfasync="false"></script>
  <script type="text/javascript" data-cfasync="false">
    var websiteConfig = websiteConfig || {};
    websiteConfig.address = 'https://template79832.motopreview.com/';
    websiteConfig.addressHash = 'f73d5bf3fa0d37bb76bd79b197423702';
    websiteConfig.apiUrl = '/api.php';
    websiteConfig.preferredLocale = 'en_US';
    websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
    websiteConfig.back_to_top_button = {
      "topOffset": 300,
      "animationTime": 500,
      "type": "theme"
    };
    websiteConfig.popup_preferences = {
      "loading_error_message": "The content could not be loaded."
    };
    websiteConfig.lazy_loading = {
      "enabled": true
    };
    websiteConfig.cookie_notification = {
      "enabled": false,
      "content": "<p class=\"moto-text_normal\">This website uses cookies to ensure you get the best experience on our website.<\/p>",
      "content_hash": "6610aef7f7138423e25ee33c75f23279",
      "controls": {
        "visible": "close,accept",
        "accept": {
          "label": "Got it",
          "preset": "default",
          "size": "medium",
          "cookie_lifetime": 365
        }
      }
    };
    angular.module('website.plugins', []);
  </script>
  <script src="mt-includes/js/website.min.js?_build=1632918598" type="text/javascript" data-cfasync="false"></script>
  <script type="text/javascript">
    $.fn.motoGoogleMap.setApiKey('AIzaSyCPbz3W389x_owB2TlrqPuMEYCTFVuRvMY');
  </script>
  <script src="mt-includes/js/website.min.js?_build=1632918598" type="text/javascript" data-cfasync="false"></script>
  <script type="text/javascript">
    $.fn.motoGoogleMap.setApiKey("AIzaSyCPbz3W389x_owB2TlrqPuMEYCTFVuRvMY");
  </script>

  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: true,
      success: function(label) {
        label.attr('id', 'valid');
      },
    });
    $("#myform").validate({
      rules: {
        password: "required",
        comfirm_password: {
          equalTo: "#password"
        }
      },
      messages: {
        hospital_name: {
          required: "Please enter a hospital name"
        },
        hospital_id: {
          required: "Please enter a hospital ID"
        },
        your_email: {
          required: "Please provide an email"
        },
        password: {
          required: "Please enter a password"
        },
        comfirm_password: {
          required: "Please enter a password",
          equalTo: "Wrong Password"
        }
      }
    });
  </script>
  <script src="src/js/jquery.min.js"></script>
  <script src="config/api_url.js"></script>
  <script src="ajax/b_location.js"></script>
  <script src="ajax/b_hospital_registration.js"></script>
</body>

</html>