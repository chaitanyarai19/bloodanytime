<!doctype html>
<?php 
include_once '../controllers/mail.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Certificate Generator</title>
  </head>
  <body>
    <center>
      <br><br><br>
      <h3>Certificate Generator</h3>
      <br><br><br><br>
      <form method="post" action="">
      <div class="form-group col-sm-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Here...">
      </div>
      <div class="form-group col-sm-6">
        <input type="email" name="email" class="form-control" id="organization" placeholder="Enter Email Here...">
      </div>
      <button type="submit" name="generate" class="btn btn-primary">Generate</button>
    </form>
    <br>
    <?php 
      if (isset($_POST['generate'])) {
        $name = strtoupper($_POST['name']);
        $name_len = strlen($_POST['name']);
        $occupation = strtoupper('bloodanytime');
        $email = $_POST['email'];
        if ($occupation) {
          $font_size_occupation = 10;
        }

        if ($name == "" || $email == "") {
          echo 
          "
          <div class='alert alert-danger col-sm-6' role='alert'>
              Ensure you fill all the fields!
          </div>
          ";
        }else{
          echo 
          "
          <div class='alert alert-success col-sm-6' role='alert'>
              Congratulations! $name on your excellent success.
          </div>
          ";

          //designed certificate picture
          $image = "certificate.png";

          $createimage = @imagecreatefrompng($image);

          //this is going to be created once the generate button is clicked
          $output = "certificate-".strtolower($name).".png";

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x = 490;
          $origin_y=360;

          //we then set the x and y axis to fix the position of our text occupation
          $origin1_x = 120;
          $origin1_y=150;

          //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=7){
            $font_size = 25;
            $origin_x = 190;
          }
          elseif($name_len<=12){
            $font_size = 30;
          }
          elseif($name_len<=15){
            $font_size = 26;
          }
          elseif($name_len<=20){
             $font_size = 18;
          }
          elseif($name_len<=22){
            $font_size = 15;
          }
          elseif($name_len<=33){
            $font_size=11;
          }
          else {
            $font_size =10;
          }

          $certificate_text = $name;

          //font directory for name
          $drFont = dirname(__FILE__)."/developer.ttf";

          // font directory for occupation name
          $drFont1 = dirname(__FILE__)."/Gotham-black.otf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont, $certificate_text);

          //function to display occupation name on certificate picture
          $text2 = imagettftext($createimage, $font_size_occupation, $rotation, $origin1_x+2, $origin1_y, $black, $drFont1, $occupation);

          imagepng($createimage,"certificate/".$output,3);
          
          $body = "Hii,<p>".$name."</p><p>successfully participated and your certificate are attached</p>";
          $altBody= "Hii, ".$name." successfully participated and your certificate are attached";
          $subject = "Certificate by bloodanytime";
          $addAttachment = "certificate/".$output;
          
          $response = sendMail($email,$subject,$body,$altBody,$addAttachment);
          $response = json_decode($response,true);
          if($response['status']){
            echo 
              "
              <div class='alert alert-success col-sm-6' role='alert'>
                  ".$response['message']."
              </div>
              ";
          }else{
              echo 
              "
              <div class='alert alert-danger col-sm-6' role='alert'>
                  ".$response['message']."
              </div>
              "; 
          }

 ?>
        <!-- this displays the image below -->
        <img src="<?php echo "certificate/".$output; ?>">
        <br> 
        <br>

        <!-- this provides a download button -->
        <br><br>
<?php 
        }
      }

     ?>

    </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
