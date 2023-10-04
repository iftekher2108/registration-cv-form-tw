
<?php 

$server_name = 'localhost';
$user_name = 'root';
$user_password = '';
$dname = 'form';


$con = new mysqli($server_name,$user_name,$user_password,$dname);

if (!$con->connect_error) {
    echo " connection successful";
}
else {
    echo " connection failed";
}








?>