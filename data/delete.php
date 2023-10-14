<?php

    include "./connection.php";

    $id = $_GET['id'];

    $delete = "DELETE FROM cv_data WHERE id = '$id'";


    $execute = mysqli_query($con,$delete);


    header("refresh:0.1; url=../cv-data.html")




?>