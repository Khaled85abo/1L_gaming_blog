<?php
include('db.php');
// print_r($_POST);


$email = $_POST['email'];
$password = md5($_POST['password']);




$query= "SELECT firstname, email, admin,  user_password from usersinformation where email = '$email' and user_password ='$password'";

$return = $dbh->query($query);

if ($return != false){

    $row = $return->fetch(PDO::FETCH_ASSOC);
}


/*if (empty($row)){
    echo "you must sign up!";
  //  header("location:index.php?err=true");
} else {
     echo ("welcome ") . $row['firstname'] . "!"; 

    session_start();
    $_SESSION ['user__name'] = $row['firstname'];
    $_SESSION ['user__password'] = $row['user_password'];



    header("location:homepage.php");
}*/

if(empty($row)) {

    header("location:loginform.php?err=true&message=<div id='fel'></div>");



} else {

    session_start();
    //setcookie("username", $row['username']);
    //setcookie("password", $row['password']);

    $_SESSION ['user__name'] = $row['firstname'];
    $_SESSION ['user__password'] = $row['user_password'];
    $_SESSION ['admin'] = $row['admin'];        
    header("location:homepage.php");

}

?>


