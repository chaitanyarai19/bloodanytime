<?php
include "../config/db/connection.php";
$data = json_decode(file_get_contents("php://input"), true);

if(isset($data['state']) && isset($data['city'])){
    $state = $data['state'];
    $city = $data['city'];
    $sql = "select (select count(blood_group) from blood where blood_group = 'A+' and city = '$city' and state = '$state') as aPositive,(select count(blood_group) from blood where blood_group = 'A-' and city = '$city' and state = '$state') as aNegative, (select count(blood_group) from blood where blood_group = 'O+' and city = '$city' and state = '$state') as oPositive, (select count(blood_group) from blood where blood_group = 'O-' and city = '$city' and state = '$state') as oNegative, (select count(blood_group) from blood where blood_group = 'B+' and city = '$city' and state = '$state') as bPositive, (select count(blood_group) from blood where blood_group = 'B-' and city = '$city' and state = '$state') as bNegative, (select count(blood_group) from blood where blood_group = 'AB+' and city = '$city' and state = '$state') as abPositive, (select count(blood_group) from blood where blood_group = 'AB-' and city = '$city' and state = '$state') as abNegative;";
    $result = mysqli_query($conn,$sql);
    $output = '';
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $output .= ' <div class="moto-cell col-sm-12" data-container="container">
                            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
                                <div class="container-fluid">
                                    <p class="moto-text_system_9">'.$city.' , '.$state.'</p>
                                    <div class="row" data-container="container">
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">'.$row['oPositive']. '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">O+</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">' . $row['oNegative'] . '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">O-</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">' . $row['aPositive'] . '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">A+</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">' . $row['aNegative'] . '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">A-</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">' . $row['bPositive'] . '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">B+</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">' . $row['bNegative'] . '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">B-</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">' . $row['abPositive'] . '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">AB+</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="maaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-container moto-container_content_5cb304163" data-widget="container" data-container="container" data-css-name="moto-container_content_5cb304163" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssas" data-animation="">
                                                    <p class="moto-text_system_7">
                                                        <span class="moto-color_custom3">' . $row['abNegative'] . '</span>
                                                    </p>
                                                    <div data-widget-id="wid_1555236197_jcdog1zd8" class="moto-widget moto-widget-divider moto-preset-2 moto-align-right moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="divider_horizontal" data-preset="2">
                                                        <hr class="moto-widget-divider-line" style="max-width: 100%; width: 60px">
                                                    </div>
                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="assa" data-animation="">
                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                            <p class="moto-text_system_8" style="text-align: right">
                                                                <span class="moto-color_custom3">AB-</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
    }
    echo $output;
}else{
    echo '<h3>Please select city and state</h3>';
}

include "../config/db/close.php";
