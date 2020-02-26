<?php
include('db.php');
// print_r($_POST);


$email = $_POST['email'];
$password = $_POST['password'];




$query= "SELECT firstname, email, user_password from usersinformation where email = '$email' and user_password ='$password'";

$return = $dbh->query($query);

if ($return != false){

    $row = $return->fetch(PDO::FETCH_ASSOC);
}


if (empty($row)){
    echo "you must sign up!";
  //  header("location:index.php?err=true");
} else {
  
 /*    session_start();
    $_SESSION ['user__name'] = $row['name'];
    $_SESSION ['user__password'] = $row['password']; */


    header("location:homepage.php");
    echo ("welcome ") . $row['firstname'] . "!";
}






?>
