<?php
define('DB_SERVER','localhost');
define('DB_USER','blood33a_trendy');
define('DB_PASS' ,'trendy@12345');
define('DB_NAME', 'blood33a_trendy');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>