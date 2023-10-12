<?php

include "./connection.php";


$id = $_GET['id'];

 $select = "SELECT * FROM cv_data WHERE id = ";

 $execute = mysqli_query($con,$select,$id);




 while ($row = mysqli_fetch_array($execute)) {



 }


?>