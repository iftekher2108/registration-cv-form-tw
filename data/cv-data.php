<?php

include "./connection.php";

$select = "SELECT * FROM cv_data";

$execute = mysqli_query($con, $select);

$i=1;

while ($row = mysqli_fetch_array($execute)) {

?>

    <tr>
        <td> <?php echo $i; ?></td>
        <td><></td>
        <td><?php echo $row['fname']. " ".$row['lname']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?> </td>
        <td><a href="cv-resume.php?id=<?php echo $row['id']; ?>" target="_blank" class="btn-primary"><i class="fa-solid fa-eye"></i></a></td>
        <td><a href="#" class="btn-primary"><i class="fa-solid fa-user-pen"></i></a></td>
        <td><a href="#" class="btn-primary"><i class="fa-solid fa-trash"></i></a></td>
    </tr>




<?php
$i++;
}
?>