<?php
session_start();

// include '/include/dbh.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>WELCOME </title>
    <script src="resizewindows.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script  src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <script type="text/javascript">

    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    </script>



  </head>
  <body>
    <div class="sidebar" style="display:none" id="mySidebar">
      <button onclick="w3_close()" class="closebutton">Close &times;</button>
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="picture.html" class="w3-bar-item w3-button">Photo</a>
      <a href="map.php" class="w3-bar-item w3-button">La vie</a>

      <section >
        <div>
          <a href="inscription.php" >Register</a>
          <div>
            <form action="includes/process.php" method="POST">
              <div id=first>
                <p2>id</p2>
              </div>
              <div>
                <input  type="text" name="id" placeholder="Username/e-mail" />
              </div>
              <div id=first>
                <p2>password</p2>
              </div>
              <div>
                <input type="text" name="password" placeholder="password" />
              </div>
              <div id=buttonlogin>
                <button class="loginbutton" type="submit" name="submit">Login</button>
              </div>
            </form>

          </div>
        </div>
      </section>
    </div>
   <!-- sidbar  -->


    <div id="titlle" >
      <div id="letter" >
      <a href="inscription.php" >Enchanté! </a>
      </div>
    </div>
    <div>
    <div id="secondtitle">
      <div id="left"> "Bon Jour!!"</div>
      <div id="right">
     <button id="bigg" onclick="w3_open()">☰</button>

    </div>
    </div>
    <!-- En-tête -->
  <div class="column">

  <div class="poet">
      <iframe width=100% height="415" src="https://www.youtube.com/embed/5mAtVsA-pes?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </iframe>
  </div>
  <div class="poet">
    <h1>Alfred de VIGNY</h1>
    <h2>1797 - 1863</h2>
    <h3>Paris</h3>
    <p2 >Prends ma main, Voyageur, et montons sur la Tour. -
      Regarde tout en bas, et regarde à l'entour.
      Regarde jusqu'au bout de l'horizon, regarde
      Du nord au sud. Partout où ton oeil se hasarde,
      Qu'il s'attache avec feu, comme l'oeil du serpent
      Qui pompe du regard ce qu'il suit en rampant,
      Tourne sur le donjon qu'un parapet prolonge,
      D'où la vue à loisir sur tous les points se plonge
      Et règne, du zénith, sur un monde mouvant,
      Comme l'éclair, l'oiseau, le nuage et le vent.
      Que vois-tu dans la nuit, à nos pieds, dans l'espace,
      Et partout où mon doigt tourne, passe et repasse ?</p2>
    </div>

  </div>
  </div>


    <script type="text/javascript">
    //
    // var imgg=;
    // //Stockphotos JS
    // imgsrc = "pic_small.png";
    // imgg= window.open(imgsrc,null ,'height=300px, width= 400px ', true);
    //
    //
    // $(document).ready(function(){
    //   $(#imag).click(function() {
    //
    //     $imggg=imgg.document;
    //     $imgggg = $imggg.find("img");
    //     $imgggg.css({"width":"800px","height":"auto"});
    //       // $img.css({"width": "800px", "height": "800px"});
    //   });​
    // });

    // $(document).ready(function(){
    // $("#imag").click(function(){
    //     $(this).hide();
    // });
    // });

    $(document).ready(function(){
      $('#imag').click(function(){

        var img = $(this).attr("src");
        // var appear = "<div id='appear_div' onclick='closeImage()'></div>";
        appear=appear.concat("<img id='appear' src='"+img+"'/");
        // appear=appear.concat("<img id='close_image' onclick='closeImage() src='pic_small.png'/>");
        $('body').append(appear);

        // $imggg=imgg.document;
        // $imgggg = $imggg.find("img");
        // $imgggg.css({"width":"800px","height":"auto"});
          // $img.css({"width": "800px", "height": "800px"});
      });​
    });
    function closeImage(){
      $('#appear_div').remove;
      $('#appear').remove;
    }

    </script>

    <!-- <div>
    <img  id="imag" src="pic_small.png"  />
    </div> -->
    <!-- <div>

      <IMG class='image_id' SRC="pic_small.png"  onclick=view(); >
      </div> -->


<div class="footer">
  <h1>Fait de JUNGMIN</h1>
  <p1>28/08/2018</p1>
  <p2>Paris</p2>
</div>

  </body>

</html>
