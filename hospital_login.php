<?php
include ("config/db/connection.php");
session_start();
if (isset($_SESSION['hospital_id'])) {
  header("location: prescription.php");
}
// header specify the page 
$header = 'hospital_login';
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
  <meta charset="utf-8" />
  <title>Bloodanytime | Hospital Login</title>
  <link rel="SHORTCUT ICON" href="mt-demo/79800/79832/mt-content/uploads/2019/04/favicon-1802.ico?_build=1635952195" type="image/vnd.microsoft.icon" />
  <link rel="canonical" href="https://template79832.motopreview.com/appointment/" />
  <meta property="og:title" content="Donor Registeration" />
  <meta property="og:url" content="https://template79832.motopreview.com/appointment/" />
  <meta property="og:type" content="website" />
  <link rel="icon" type="image/x-icon" href="Blood Any Time logo/1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="mt-includes/css/hos_login_main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background-color: #303641;
    }
  </style>

  <!-- <link rel="preload" as="font" type="font/woff2" crossorigin href="https://template79832.motopreview.com/mt-includes/fonts/fontawesome-webfont.woff2?v=4.7.0" /> -->
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
                            Hospital Login
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

      <br><br>
      <div id="container-login">
        <div id="title">
          <i class="material-icons lock">lock</i> Login
        </div>
        <form id="hospital_login" method="POST">
          <div class="input">
            <div class="input-addon">
              <i class="material-icons">face</i>
            </div>
            <input id="username" name="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
          </div>
          <div class="clearfix"></div>
          <div class="input">
            <div class="input-addon">
              <i class="material-icons">vpn_key</i>
            </div>
            <input id="password" name="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
          </div>
          <div class="remember-me">
            <input type="checkbox">
            <span style="color: #DDD">Remember Me</span>
          </div>
          <input type="submit" value="Log In" />
        </form>
        <div id="hospital_login_message"></div>
        <div class="forgot-password">
          <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
          <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
          Don't have an account yet?
          <a href="hospital.php"><button id="register-link">Register here</button></a>
        </div>
      </div>
      <br><br>
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
        first_name: {
          required: "Please enter a firstname"
        },
        last_name: {
          required: "Please enter a lastname"
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
  <script src="./src/js/jquery.min.js"></script>
  <script src="./config/api_url.js"></script>
  <script src="./ajax/b_hospital_login.js"></script>
</body>

</html>