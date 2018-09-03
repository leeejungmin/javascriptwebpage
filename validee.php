<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <?php
    include 'includes/dbh.php';
    $sql = "SELECT civilite, prenom, nom, age, email FROM user where id=(select max(id) from user)" ;
    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_assoc($result))
    {
      $GLOBALS['civilite'] = $row["civilite"];
      $GLOBALS['prenom'] = $row["prenom"];
      $GLOBALS['nom'] = $row["nom"];
      $GLOBALS['age'] = $row["age"];
      $GLOBALS['email'] = $row["email"];
      // echo "Bonjour ". $row["civilite"]. " " .$row["prenom"].$row["nom"] . "<br >";
      // echo "Vous avez " . $row["age"]. "ans et vous êtes majeur" . "<br >";
      // echo "Votre email est :".$row["email"] . "<br >";

    }


    mysqli_close($conn);


    ?>

    <h1 id ="god">Inscription validee</h1>

    <div id="good"> </div>
    <script type="text/javascript">

  var civ = '<?php  echo ( $civilite) ;?>';
  var pre = '<?php  echo ( $prenom) ;?>';
  var nom = '<?php  echo ( $nom) ;?>';
  var email = '<?php  echo ( $email) ;?>';
  var age = '<?php  echo ( $age) ;?>';
  var css = '<?php  echo ( $civilite) ;?>';
/// echo json_encode하면 ""로 받는다.

  document.getElementById("good").innerHTML ="Bonjour "+civ +" " +pre+nom+"<br>"+"Vous avez " +age+ "ans et vous êtes majeur" + "<br >" +
  "Votre email est :"+email+ "<br >";


  // window.alert("Bonjour "+civ+pre+nom + "Vous avez"+ age+ "ans et vous ete majeur");
  // window.alert(arr);
  </script>

      <form action="index.php" >
        <button id='valid' type="submit" name="submit">return</button>
      </form>
</body>
</html>
