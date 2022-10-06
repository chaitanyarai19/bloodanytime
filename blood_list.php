<?php
session_start();
if (!isset($_SESSION['hospital_id'])) {
    header("location: hospital_login.php");
}
if(!isset($_SESSION['prescription'])){
      header("location: prescription.php");
  }
include_once 'config/db/connection.php';
if (!isset($_GET['blood_group']) && !isset($_GET['state']) && !isset($_GET['city'])) {
    header('location: search_blood.php');
}
// header specify the page 
$header = 'blood_list';
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
    <meta charset="utf-8" />
    <title>Donor Registration</title>
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
    <link rel="stylesheet" href="src/css/table-responsive.css">
    <link rel="stylesheet" href="src/css/styles.css">
  <script src="src/js/jquery.min.js" type="text/javascript"></script>
   <script src="src/js/script.js"></script>
</head>

<body class="moto-background moto-website_live">
    <div class="page">
        <?php include_once 'component/header.php'; ?>
        <section style="margin-top:40px; margin-bottom:40px;">
            <div id="wrapper">
                <h1><?php echo $_GET['blood_group'] . ' in ' . $_GET['city'] . ',' . $_GET['state']; ?></h1>
                <?php
                $sql = "SELECT * FROM blood WHERE blood_group = '$_GET[blood_group]' and state = '$_GET[state]' and city = '$_GET[city]'";
                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if (mysqli_num_rows($result) > 0) {
                    echo '<h4>TOTAL RECORD FOUND :'.mysqli_num_rows($result).'</h4>';
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Moblie</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                        <td data-label="S.No.">'.$i.'.</td>
                                        <td data-label="Name">'.$row['name'].'</td>
                                        <td data-label="Mobile">'.$row['phone'].'</td>
                                        <td data-label="Address">'.$row['address'].'</td>
                                        <td data-label="Email">'.$row['email'].'</td>
                                        <td data-label="Report">Report</td>
                                    </tr>';
                                    $i++;
                            }
                        ?>
                    </tbody>
                </table>
                <?php
                } else {
                    echo '<h3>No Record Found.</h3>';
                }
                ?>
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
    <script src="./src/js/jquery.min.js"></script>
    <script src="./config/api_url.js"></script>
    <script src="./ajax/b_hospital_registration.js"></script>
</body>

</html>