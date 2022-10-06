
<?php
session_start();

$header = '../donor_registration';
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
  <meta charset="utf-8" />
  <title>Bloodanytime | Donor Login</title>
  <link rel="SHORTCUT ICON" href="../mt-demo/79800/79832/mt-content/uploads/2019/04/favicon-1802.ico?_build=1635952195" type="image/vnd.microsoft.icon" />
  <link rel="canonical" href="https://template79832.motopreview.com/appointment/" />
  <meta property="og:title" content="Donor Registeration" />
  <meta property="og:url" content="https://template79832.motopreview.com/appointment/" />
  <meta property="og:type" content="website" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="../Blood Any Time logo/1.png">
  <link rel="preload" as="font" type="font/woff2" crossorigin href="https://template79832.motopreview.com/mt-includes/fonts/fontawesome-webfont.woff2?v=4.7.0" />
  <link rel="stylesheet" href="../mt-includes/css/assets.min.css?_build=1633339793" />
  <style>
    @import url(//fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic|Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic&subset=latin);
  </style>
  <link rel="stylesheet" href="../mt-demo/79800/79832/mt-content/assets/styles.css?_build=1632936245" id="moto-website-style" />
  <link rel="stylesheet" href="../src/css/styles.css">
  <script src="../src/js/jquery.min.js" type="text/javascript"></script>
   <script src="../src/js/script.js"></script>
   
</head>

<body class="moto-background moto-website_live">
  <div class="page">
    <?php include_once '../component/header.php'; ?>
    <section id="section-content" class="content page-12 moto-section" data-widget="section" data-container="section">
      <div class="moto-widget moto-widget-block moto-bg-color_custom4 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="
            background-image: url(../mt-demo/79800/79832/mt-content/uploads/2019/04/mt-1802-content-bg05.jpg);
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
          " data-bg-image="../2019/04/mt-1802-content-bg05.jpg" data-bg-position="top">
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
                            Login as a Donor
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
      <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="block" data-spacing="lama" style="" data-bg-position="left top">
        <div class="container-fluid">
          <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
              <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
                <div class="container-fluid">
                  <div class="row" data-container="container">
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                      <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
                        <div class="moto-widget-text-content moto-widget-text-editable">
                          <h2 class="moto-text_system_7">
                            Donor Login
                          </h2>
                        </div>
                      </div>
                      <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aama" data-animation="">
                        <div class="moto-widget-text-content moto-widget-text-editable">
                          <p class="moto-text_206">
                            Donor Login
                          </p>
                        </div>
                      </div>
                      <div data-widget-id="wid_1555312680_wy1wrkcn9" class="moto-widget moto-widget-integrations-acuity-scheduling moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="integrations.acuity_scheduling">
                        <div id="wid_1555319995_sgk7l55px" class="moto-widget moto-widget-contact_form moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-preset="default" data-widget="contact_form" data-spacing="asas">
                          <div ng-controller="widget.ContactForm.Controller" ng-init='hash = &apos;2@eyJoIjoiSFljQXNsYlhUS09rM0l2ZzBqb0pKZ1YzR2Q0ZXc1RTNxdXQ5YktjRlExRT0iLCJpIjoiVnhBeDFpOGpTUW85dGlKS0hOVDd1Zz09IiwidiI6IjlEU2lOaUxwVWpGR2M4TzNaMlBHZnNVUEVqbWVuSkxmbEoxWEE0MXhReGVGZW9qNGtiQ0V5amI3RG5COEFLd2VvNjYzdFBIV2k4R1JPZW5iaCs4dTRoMVZEVnlXa1YwMkJxTVB4b2hjSFg4PSJ9&apos;;actionAfterSubmission={"action":"none","url":"","target":"_self","id":""};resetAfterSubmission=false'>
                            
                            <form method="POST" id="wid_1555319995_sgk7l55px__form">
                              <div ng-show="sending" class="contact-form-loading"></div>
                             
                            
                              <div class="moto-widget-contact_form-group">
                                <label for="field_phone_wid_1555319995_sgk7l55px" class="moto-widget-contact_form-label">Enter your Phone number</label>
                                <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Enter your Phone number *" ng-blur="validate('phone')" required ng-model-options="{ updateOn: 'blur' }" name="phone" id="field_phone_wid_1555319995_sgk7l55px" ng-model="message.phone" />
                                <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.phone.$invalid && !contactForm.phone.$pristine && !contactForm.phone.emailInvalid">Field
                                  is required</span>
                              </div>
                              
                         
                              <div class="moto-widget-contact_form-group">
                                <label for="field_name_wid_1555319995_sgk7l55px" class="moto-widget-contact_form-label">Enter Your Password</label>
                                <input type="password" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Enter Your Password *" ng-blur="validate('name')" required ng-model-options="{ updateOn: 'blur' }" name="password" id="field_name_wid_1555319995_sgk7l55px" ng-model="message.name" />
                                <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.name.$invalid && !contactForm.name.$pristine && !contactForm.name.emailInvalid">Field
                                  is required</span>
                              </div>
                          
                              <div class="moto-widget-contact_form-buttons">
                                <div class="moto-widget moto-widget-button moto-preset-default moto-preset-provider-default moto-align-left" data-preset="default" data-align="left">
                                  <input type="submit" name="register" class="moto-widget-button-link moto-size-medium" data-size="medium" value="Login">
                                  <!-- <span class="fa moto-widget-theme-icon"></span><span class="moto-widget-button-label">Register</span> -->
                                </div>
                              </div>
                              
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
      </div>
      <div class="moto-widget moto-widget-block moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="mala" style="" data-bg-position="left top">
        <div class="container-fluid">
          <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
              <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto row-fixed" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
                <div class="container-fluid">
                  <div class="row" data-container="container">
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="sasa" data-bg-position="left top">
                      <div class="moto-widget moto-widget-row moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="laaa" style="
                            background-image: url(../mt-demo/79800/79832/mt-content/uploads/2019/04/mt-1802-home-img04.jpg);
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                          " data-bg-image="../2019/04/mt-1802-home-img04.jpg" data-bg-position="center">
                        <div class="container-fluid">
                          <div class="row" data-container="container">
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                              <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-medium" data-widget="text" data-preset="default" data-spacing="sasm" data-animation="">
                                <div class="moto-widget-text-content moto-widget-text-editable">
                                  <h3 class="moto-text_system_8">
                                    Donor Center Locations
                                  </h3>
                                  <p class="moto-text_normal">
                                    <span class="moto-color5_5">Find a blood donor center near you
                                    </span>
                                  </p>
                                  <p class="moto-text_normal">&nbsp;</p>
                                </div>
                              </div>
                              <div data-widget-id="wid_1555312764_q53o5vinl" class="moto-widget moto-widget-button moto-preset-2 moto-preset-provider-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-medium" data-widget="button">
                                <a href="/contacts.php" data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span>
                                  <span class="moto-widget-button-label">Learn more</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="sasa" data-bg-position="left top">
                      <div class="moto-widget moto-widget-row moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="laaa" style="
                            background-image: url(../mt-demo/79800/79832/mt-content/uploads/2019/04/mt-1802-home-img06.jpg);
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                          " data-bg-image="../2019/04/mt-1802-home-img06.jpg" data-bg-position="center">
                        <div class="container-fluid">
                          <div class="row" data-container="container">
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                              <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-medium moto-spacing-bottom-small moto-spacing-left-medium" data-widget="text" data-preset="default" data-spacing="smsm" data-animation="">
                                <div class="moto-widget-text-content moto-widget-text-editable">
                                  <h3 class="moto-text_system_8">
                                    Other Ways to help
                                  </h3>
                                  <p class="moto-text_normal">
                                    <span class="moto-color5_5">Even if you aren't eligible to donate,
                                      you can still make a difference.</span>
                                  </p>
                                </div>
                              </div>
                              <div data-widget-id="wid_1555312764_30k06mkhi" class="moto-widget moto-widget-button moto-preset-3 moto-preset-provider-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-medium" data-widget="button">
                                <a href="/support-us.php" data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span>
                                  <span class="moto-widget-button-label">Learn more</span></a>
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
          </div>
        </div>
      </div>

    </section>
  </div>

  
  <?php include_once '../component/footer.php'; ?>
  <div data-moto-back-to-top-button class="moto-back-to-top-button">
    <a ng-click="toTop($event)" class="moto-back-to-top-button-link">
      <span class="moto-back-to-top-button-icon fa"></span>
    </a>
  </div>
  <script src="../mt-includes/js/website.assets.min.js?_build=1632918612" type="text/javascript" data-cfasync="false"></script>
  <script src="../mt-includes/js/website.assets.min.js?_build=1632918612" type="text/javascript" data-cfasync="false"></script>
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
  <script src="../mt-includes/js/website.min.js?_build=1632918598" type="text/javascript" data-cfasync="false"></script>
  <script type="text/javascript">
    $.fn.motoGoogleMap.setApiKey('AIzaSyCPbz3W389x_owB2TlrqPuMEYCTFVuRvMY');
  </script>
  <script src="../mt-includes/js/website.min.js?_build=1632918598" type="text/javascript" data-cfasync="false"></script>
  <script type="text/javascript">
    $.fn.motoGoogleMap.setApiKey("AIzaSyCPbz3W389x_owB2TlrqPuMEYCTFVuRvMY");
  </script>
  <script src="./src/js/jquery.min.js"></script>
  <script src="./config/api_url.js"></script>
  <script src="./ajax/b_location.js"></script>
  <script src="./ajax/b_donor_registration.js"></script>
</body>

</html>