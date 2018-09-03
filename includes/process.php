<?php

  include 'dbh.php';
  // get value pass
  $username = $_POST['id'];
  $password = $_POST['password'];
    // to prevent mysql injection
  // $username = stripcslashes[$username];
  // $password = stripcslashes[$password];
  $username = mysqli_real_escape_string($conn,$username);
  $password = mysqli_real_escape_string($conn,$password);


  // connect to the database
  $result = mysqli_query($conn,"select * from user where userid = '$username' and password ='$password' ")
                or die("fail to dababase".mysqli_error());
  $row = mysqli_fetch_array($result);
  if($row['userid'] == $username && $row['password'] == $password){
    echo "Login success !! wow" . $row['user_id'];
    header("Location: ../index.html");
  }else{
    echo "failed wowowowo.....";
  }
 ?>
