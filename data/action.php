<?php

include "./connection.php";


// photo upload with file

// if(isset($_POST['submit'])) {

//   $photo_name = $_FILES["choosefile"]["photo"];

//   $temp_photo_name = $_FILES["choosefile"]["tmp_photo"];  
  
//       $photo_folder = "../upload/".$photo_name;  
  
//       move_uploaded_file($temp_photo_name, $photo_folder);



  
// }



// File information
$uploadDir = "../upload/";

// photo upload with file
$photoName = rand(999,9999999).date("Y-m-d-h-i-s")."-". $_FILES["photo"]["name"] ;
$tempFile = $_FILES["photo"]["tmp_name"];

    // Move the uploaded file
move_uploaded_file($tempFile,$uploadDir . $photoName);








      // Insert information into the database
     
    $fname = $_POST['fname']; // 1


    $lname = $_POST['lname']; // 2

    $a_designation = $_POST['a_designation']; // 3

    $email= $_POST['email'];  // 4

    $phone = $_POST['phone']; // 5

    $brith_date = $_POST['brith_date']; // 6

    $present_address = $_POST['present_address']; // 7

    $parmanent_address = $_POST['parmanent_address']; // 8

    $gender = $_POST['gender']; // 9
    $career_objective = $_POST['career_objective']; // 10
    $e_institute = $_POST['e_institute']; // 11
    $e_start_date = $_POST['e_start_date']; // 12
    $e_end_date = $_POST['e_end_date']; // 13
    $e_duration = $_POST['e_duration']; // 14 
    $e_department = $_POST['e_department']; // 15
    $degree = $_POST['degree']; // 16
    $result = $_POST['result']; // 17
    $technical_skills = $_POST['technical_skills']; // 18
    $language = $_POST['language']; // 19
    $hobby = $_POST['hobby']; // 20
    $activity = $_POST['activity']; // 21
    $c_institute = $_POST['c_institute']; // 22
    $c_start_date = $_POST['c_start_date']; // 23
    $c_end_date = $_POST['c_end_date']; // 24
    $c_duration = $_POST['c_duration']; // 25
    $c_designation = $_POST['c_designation']; // 26




  //   if(isset($_POST["submit"])) {
  //         // cv_resume file name randomization
  //   $cv_resume = rand(999,9999999).date("Y-m-d-h-i-s")."-".$_FILES['cv_resume']['name'];
  //   // cv_resume file name randomization


  //   // temparory file name
  //   $temp_cv_name = $_FILES['cv_resumes']['tmp_name'];
  //   // temparory file name

  // // uploaded directory
  //   $uploads_dir = "/uploads";
  // // uploaded directory

  //   move_uploaded_file($temp_cv_name,$uploads_dir."/".$cv_resume);

  //   }


    $sql_insert = "INSERT INTO cv_data (photo,fname, lname, a_designation, email, phone, brith_date, present_address, parmanent_address, gender, career_objective, e_institute, e_start_date, e_end_date, e_duration, e_department, degree, result, technical_skills, language, hobby, activity, c_institute, c_start_date, c_end_date, c_duration, c_designation) VALUES ('$photoName','$fname','$lname','$a_designation','$email','$phone','$brith_date','$present_address','$parmanent_address','$gender','$career_objective','$e_institute','$e_start_date','$e_end_date','$e_duration','$e_department','$degree','$result','$technical_skills','$language','$hobby','$activity','$c_institute','$c_start_date','$c_end_date','$c_duration','$c_designation')";

    $backup ="INSERT INTO cv_data_backup SELECT * FROM cv_data";

    if ($con->query($sql_insert) === TRUE) {
      // echo "New record created successfully";
      return header("refresh:0.1, url=../index.html");  
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }



















?>