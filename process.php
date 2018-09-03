<?php
session_start();
include 'includes/dbh.php';


// $age = $_POST["postage"];
// $userid = $_POST['postuserid'];



 if(isset($_POST["submit"])){
  $userid = $_POST["userid"];
  $password = $_POST["password"];
  $prenom= $_POST["prenom"];
  $nom = $_POST["nom"];
  $age =$_POST["age"];
  $email = $_POST["email"];
  $civilite = $_POST["check_list"];

  print_r($civilite[0]);

  $userid = mysqli_real_escape_string($conn, $_POST["userid"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $prenom = mysqli_real_escape_string($conn, $_POST["prenom"]);
  $nom = mysqli_real_escape_string($conn, $_POST["nom"]);
  $age = mysqli_real_escape_string($conn, $_POST["age"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);


  if(count($civilite)===2){

      echo "c'est pas possible votre civilité";


  }else{

    if(!empty($civilite[0])){
      $civilite = mysqli_real_escape_string($conn,$civilite[0]);
    }else{
      $civilite = mysqli_real_escape_string($conn,$civilite[1]);
    }

  }


  $user_check_query = "SELECT * FROM users WHERE userid='$userid' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
      if ($user['userid'] === $userid) {
        array_push($errors, "Username already exists");
        header('Location:inscription.php');
      }

      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        header('Location:inscription.php');
      }
    }

    // $password = md5($password_1);
    $query = "INSERT INTO user (userid, password, prenom, nom, age, email, civilite) VALUES('$userid', '$password', '$prenom', '$nom', '$age', '$email', '$civilite')";

    mysqli_query($conn, $query);
    $_SESSON['userid'] = $userid;
    $_SESSON['success'] = "Vous êtes inscrit! ";

    if(count($civilite)===2){
      echo "c'est pas possible votre civilité";

      header('Location:fail.html');
    }else{

      if(intval($age) > 18){
        header('Location:validee.php');
      }else{
        header('Location:refusee.php');
      }

    }

}








  ?>
