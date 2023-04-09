<?php

$host = "localhost";
$username = "id18338412_testingdb";
$password = "p_NU1uiXN&AO3E8V";
$dbname = "id18338412_testing";

$conn = mysqli_connect($host, $username, $password, $dbname);
if(mysqli_connect_errno())
    echo "Connection could not be established..." . mysqli_connect_error();
else
    echo "Successfully connected to the database.";

?>
