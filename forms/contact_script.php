
<?php


$con = mysqli_connect("localhost", "root", "", "hegnus")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  
  
  $subject = trim($_POST['subject']);

  $message = trim($_POST['message']);
  
  

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  
  $query = "INSERT INTO contact(name, email, subject, message)VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "')";
  mysqli_query($con, $query) or die(mysqli_error($con));
  
?>


