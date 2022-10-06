<?php
include "../config/db/connection.php";
include_once '../controllers/mail.php';
include_once '../config/api_url.php';
session_start();
$data = json_decode(file_get_contents("php://input"), true);

if (isset($_GET['type']) && $_GET['type'] == 'register') {
    
    $center_name = $_POST['name'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $address_url = $_POST['address_url'];
    
    $extension = array("jpeg","jpg","png");
    
    $banner_name = $_FILES['banner']['name'];
    $banner_tmp_file = $_FILES['banner']['tmp_name'];
    $extension_check = pathinfo($_FILES['banner']['name'],PATHINFO_EXTENSION);
    $banner_new_name =  str_replace(' ', '_', strtolower($center_name))."_".time().rand(1,1000000).".".$extension_check;
    $query = "INSERT INTO donor_centers (name,email,phone,url,address_url,banner,address,state,city) VALUES ('$center_name','$email','$phone','$url','$address_url','$banner_new_name','$address','$state','$city')";
        if (mysqli_query($conn, $query)){
            if(isset($banner_name) && in_array($extension_check,$extension)){
                if(move_uploaded_file($banner_tmp_file,"../src/upload/".$banner_new_name)){
                    echo '<div class="moto-widget-contact_form-success">registration successfull</div>';
                    echo '<div class="moto-widget-contact_form-success">banner uploaded</div>';
                }else{
                    echo '<div class="moto-widget-contact_form-success">registration successfull</div>';
                    echo '<div class="moto-widget-contact_form-danger">banner failed to upload</div>';
                }
            }else{
                echo '<div class="moto-widget-contact_form-success">registration successfull</div>';
            }
        } else {
            echo '<div class="moto-widget-contact_form-danger">registration failed or file not supported</div>';
        }
    
}

if(isset($_GET['type']) && $_GET['type'] == "search"){
    
    $state = isset($_POST['state'])?$_POST['state']:"";
    $city = isset($_POST['city'])?$_POST['city']:"";
    
    $output = "";
    
    $query = "SELECT * FROM donor_centers WHERE state = '$state' AND city = '$city'";
    
    $output .='<div class="moto-widget-tabs__wrapper">
                          <div class="moto-widget-tabs__headers-wrapper moto-widget-tabs__headers-wrapper_icon-left moto-widget-tabs__headers-wrapper_headers-center" style="width: auto">
                            <div class="moto-widget-tabs__header moto-widget-tabs__header_desktop moto-widget-tabs__header_opened" data-tab="wid_1555243727_bjwcm43mi">
                              <span class="moto-widget-tabs__header-item moto-widget-tabs__header-title">'.$state.' > '.$city.'</span>
                            </div>
                          </div>
                          <div class="moto-widget-tabs__header moto-widget-tabs__header_mobile moto-widget-tabs__header_opened" data-tab="wid_1555243727_bjwcm43mi">
                                <span class="moto-widget-tabs__header-item moto-widget-tabs__header-title">'.$state.' > '.$city.'</span>
                              </div>
                              <div class="row" style="padding-top:5rem;">';
    
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $output .='
        <div data-widget-id="wid_1555243746_w9j0bo5aw" class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="
                                              background-position: left top;
                                            " data-widget="row.column" data-container="container" data-spacing="aaaa">
                                          <div data-widget-id="wid_1555243791_9u6za10r1" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="image">
                                            <span class="moto-widget-image-link">
                                              <img data-src="';
                                              if(isset($row["banner"]))
                                              {
                                                  $output.="../src/upload/".$row['banner']."";
                                              }
                                              else
                                              {
                                                  $output.="mt-demo/79800/79832/mt-content/uploads/2019/04/mt-1802-donor_center-img01.jpg";
                                              }
                                              $output.='" class="moto-widget-image-picture lazyload" style="height:170.950px; width:380px;" data-id="361" title="" alt="" />
                                            </span>
                                          </div>
                                          <div data-widget-id="wid_1555243837_pyuzhp3ee" class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v" data-animation="">
                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                              <p class="moto-text_229">
                                                '.$row["name"].'
                                              </p>
                                              <p class="moto-text_normal">
                                                <span class="moto-color_custom4"><span class="fa"></span></span>&nbsp; &nbsp;'.$row["address"].'
                                              </p>
                                              <p class="moto-text_normal">
                                                <span class="moto-color_custom4"><span class="fa"></span></span>&nbsp;&nbsp;Phone:
                                                <a href="tel:'.$row["phone"].'" data-action="call" class="moto-link">'.$row["phone"].'</a>
                                              </p>
                                              <p class="moto-text_normal">
                                                <span class="moto-color_custom4"><span class="fa"></span></span>&nbsp;&nbsp;Email:
                                                <a href="mailto:'.$row["email"].'" data-action="mail" class="moto-link">'.$row["email"].'</a>
                                              </p>
                                              <!-- <p class="moto-text_normal">
                                                <span class="moto-color_custom4"><span class="fa"></span></span>&nbsp;Open Every Day: 8:00 am
                                                - 22:00 pm
                                              </p> -->
                                            </div>
                                          </div>
                                          <div data-widget-id="wid_1555244168_ctd0z22rj" class="moto-widget moto-widget-row row-gutter-0 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="mobile-v" data-spacing="aama" style="
                                                background-position: left top;
                                              ">
                                            <div class="container-fluid">
                                              <div class="row" data-container="container">
                                                <div data-widget-id="wid_1555244168_f6f5zm5hr" class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="
                                                      background-position: left
                                                        top;
                                                    " data-widget="row.column" data-container="container" data-spacing="aaaa">
                                                  <div data-widget-id="wid_1555244182_52bd72v8a" class="moto-widget moto-widget-button moto-preset-default moto-preset-provider-default moto-align-left moto-align-center_mobile-h moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="button">
                                                    <a href="'.$row["url"].'" data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span>
                                                      <span class="moto-widget-button-label">Donor
                                                        Registeration</span></a>
                                                  </div>
                                                </div>
                                                <div data-widget-id="wid_1555244169_09tyigf5k" class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="
                                                      background-position: left
                                                        top;
                                                    " data-widget="row.column" data-container="container" data-spacing="aaaa">
                                                  <div data-widget-id="wid_1555244249_clhor7b97" class="moto-widget moto-widget-button moto-preset-4 moto-preset-provider-default moto-align-left moto-align-center_mobile-h moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="button">
                                                    <a href="'.$row["address_url"].'" data-action="popup" data-popup-id="14" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span>
                                                      <span class="moto-widget-button-label">Direction</span></a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        ';
    }
    
    $output .= '</div></div>';
    echo $output;
}

include "../config/db/close.php";
?>