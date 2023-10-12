<?php

include "./connection.php";

 $select = "SELECT * FROM cv_data WHERE id = $id";

 $execute = mysqli_query($con,$select);


 while ($row = mysqli_fetch_array($execute)) {


    
 }




?>