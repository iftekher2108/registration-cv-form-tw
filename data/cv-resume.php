<?php

include "./connection.php";


$id = $_GET['id'];

 $select = "SELECT * FROM cv_data WHERE id = '$id' ";

 $execute = mysqli_query($con,$select);


// echo "iftekher mahmud pervez";

 while ($row = mysqli_fetch_array($execute)) {


    echo $row['fname'];
    echo $row['email'];





 }


?>