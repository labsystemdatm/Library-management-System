<?php
$DBSERVER = "localhost";
$DBUSER = "root";
$DB_PASS = "";
$DB_NAME = "lms";

$conn = mysqli_connect($DBSERVER, $DBUSER, $DB_PASS, $DB_NAME);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());

} else {
    //echo("connection Established");
}
?>