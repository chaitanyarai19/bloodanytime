<?php
session_start();
if (!isset($_SESSION['hospital_id'])) {
  header("location: hospital_login.php");
}
// header specify the page 
$header = 'prescription';
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
  <meta charset="utf-8" />
  <title>Bloodanytime | Prescription</title>
  <link rel="SHORTCUT ICON" href="mt-demo/79800/79832/mt-content/uploads/2019/04/favicon-1802.ico?_build=1635952195" type="image/vnd.microsoft.icon" />
  <link rel="canonical" href="https://template79832.motopreview.com/appointment/" />
  <meta property="og:title" content="Donor Registeration" />
  <meta property="og:url" content="https://template79832.motopreview.com/appointment/" />
  <meta property="og:type" content="website" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/x-icon" href="Blood Any Time logo/1.png">

  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"> -->

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
      <div class="container-fluid moto-widget moto-widget-row moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto">
        <div class="row">
          <div class="moto-cell col-sm-12" data-container="container">
            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
              <div class="container-fluid">
                <div class="row" data-container="container">
                  <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                    <div data-widget-id="wid_1555312680_wy1wrkcn9" class="moto-widget moto-widget-integrations-acuity-scheduling moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="integrations.acuity_scheduling">
                      <div id="wid_1555319995_sgk7l55px" class="moto-widget moto-widget-contact_form moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-preset="default" data-widget="contact_form" data-spacing="asas">
                        <div ng-controller="widget.ContactForm.Controller" ng-init='hash = &apos;2@eyJoIjoiSFljQXNsYlhUS09rM0l2ZzBqb0pKZ1YzR2Q0ZXc1RTNxdXQ5YktjRlExRT0iLCJpIjoiVnhBeDFpOGpTUW85dGlKS0hOVDd1Zz09IiwidiI6IjlEU2lOaUxwVWpGR2M4TzNaMlBHZnNVUEVqbWVuSkxmbEoxWEE0MXhReGVGZW9qNGtiQ0V5amI3RG5COEFLd2VvNjYzdFBIV2k4R1JPZW5iaCs4dTRoMVZEVnlXa1YwMkJxTVB4b2hjSFg4PSJ9&apos;;actionAfterSubmission={"action":"none","url":"","target":"_self","id":""};resetAfterSubmission=false'>
                          <form class="moto-widget-contact_form-form" role="form" accept-charset="UTF-8" action="#" method="POST" enctype="multipart/form-data" id="prescription_form">

                            <div class="moto-widget-contact_form-group">
                              <label class="moto-widget-contact_form-label">Hospital ID</label>
                              <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="hospital id *" value="<?php echo $_SESSION['hospital_id']; ?>" disabled />
                            </div>
                            <div class="moto-widget-contact_form-group">
                              <label class="moto-widget-contact_form-label">Hospital Name</label>
                              <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="hospital name *" value="<?php echo $_SESSION['hospital_name']; ?>" disabled />
                            </div>
                            <div class="moto-widget-contact_form-group">
                              <label class="moto-widget-contact_form-label">Patient Name</label>
                              <input type="text" name="patient_name" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Enter patient name *" required />
                            </div>
                            <div class="moto-widget-contact_form-group">
                              <label class="moto-widget-contact_form-label">Upload Patient Prescription</label>
                              <input type="file" name="patient_prescription" class="moto-widget-contact_form-field moto-widget-contact_form-input" required />
                            </div>

                            <div class="moto-widget-contact_form-buttons">
                              <div class="moto-widget moto-widget-button moto-preset-default moto-preset-provider-default moto-align-left" data-preset="default" data-align="left">
                                <input type="submit" class="moto-widget-button-link moto-size-medium" data-size="medium" value="Submit">
                              </div>
                            </div>
                            <div id="prescription_message"></div>
                          </form>
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
      <br>
      <br>
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
  <script src="./ajax/b_prescription.js"></script>
</body>

</html>