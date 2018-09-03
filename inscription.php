<?php
session_start();

// include '/include/dbh.php';
 ?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
      <script  src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Inscription</title>
  </head>
  <body id="ins">
    <H1> Inscription </H1>

      <form id="inscrip" action="process.php" method="POST">

        <div >
          <p2>Userid</p2>
        </div>
        <div>
          <input id="userid" type="text" name="userid" placeholder="Entrez votre id" />
        </div>
        <div >
          <p2>Password</p2>
        </div>
        <div>
          <input type="text" name="password" placeholder="Entrez votre password" />
        </div>
        <div >
          <p2>Prénom</p2>
        </div>
        <div>
          <input id="name" type="text" name="prenom" placeholder="Entrez votre prénom" />
        </div>
        <div >
          <p2>Nom</p2>
        </div>
        <div>
          <input type="text" name="nom" placeholder="Entrez votre nom..." />
        </div>
        <div >
          <p2>Age</p2>
        </div>
        <div>
          <input id="agee" type="number" name="age" placeholder="Entrez votre âge" />
        </div>
        <div>
          <p2>civilité</p2>
        </div>
        <div>
          <label class="box">Madame
        <input type="checkbox" id="checkk" name="check_list[0]" value="Madame" >
        <span class="checkmark"></span>
      </label>
      <label class="box">Monsier
        <input type="checkbox" id="check" name="check_list[1]"  value="Monsier">
        <span class="checkmark"></span>
      </label>
        <div >
          <p2>E-mail</p2>
        </div>
        <div>
          <input type="text" name="email" placeholder="Entrez votre e-mail..." />
        </div>
        <div id=buttonlogin>
          <button id='valid' type="submit" name="submit" >Valider</button>
        </div>
      </form>

      <div id="result"> </div>

      <script type="text/javascript">

      // var check_list=[];
      // myFunction();
      // function myFunction() {
      //     var t = document.getElementById("agee").value;
      //       document.getElementById("result").innerHTML=ckeck_list[0];

          //   if(check_list.length==1){
          // window.alert("nonono");
          //   }
        // };

    //   t.addEventListener('submit', function(event){
    //     if(document.getElementById("name")=""){
    //       alert("C'est pas possible ");
    //       event.preventDefault();
    //   }
    // });
    // function post(){
    //
    //   var age = $("#agee").val();
    //
    //
    //   $.post('process.php',{postage:age},function(data)
    // {
    //   $("#result").html(data);
    // });
    // }


      </script>

  </body>
</html>
