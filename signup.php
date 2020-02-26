<?php
include("db.php");


$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$query= "INSERT INTO usersinformation (firstname, lastname, email, user_password) VALUES (:firstname, :lastname, :email, :user_password)";

$sth = $dbh->prepare($query);
$sth->bindParam(':firstname', $firstName);
$sth->bindParam(':lastname', $lastName);
$sth->bindParam(':email', $email);
$sth->bindParam(':user_password', $password);

$return = $sth->execute();
print_r($dbh->errorInfo());


 if (empty($row)){
     echo "du kan inte logga in";
    header("location:login.php?err=true");
 } else {
     session_start();
     $_SESSION ['user__name'] = $row['firstname'];
     $_SESSION ['user__password'] = $row['password'];
     echo "Regestration succes";


     header("location:login.php"); 
 }






?>
    