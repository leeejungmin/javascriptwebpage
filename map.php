<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="style.css" />
      <script  src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

      function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
      }
      function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
      }

      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125274612-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-125274612-1');
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
      <a href="inscription.php" >Carte de Paris </a>
      </div>
    </div>
    <div id="secondtitle">
      <div id="left"> </div>
      <div id="right">
     <button id="bigg" onclick="w3_open()">☰</button>

    </div>
    </div>
    <div class="column">
    <div id="map" style="width:900px;height:500px;background:yellow;margin:10px;float: left;width: 100%;">

      <script>

    function myMap() {
      map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12.5,
            center: new google.maps.LatLng(48.852969, 2.349903),
            mapTypeId: google.maps.MapTypeId.roadmap
          });

      var script = document.createElement('script');

      script.src = 'restaurants.json';
      document.getElementsByTagName('head')[0].appendChild(script);
      }


        window.eqfeed_callback = function(results) {
        for (var i = 0; i < results.features.length; i++) {
          var coords = results.features[i].geometry.coordinates;
          var latLng = new google.maps.LatLng(coords[1],coords[0]);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
        }
      }


</script>

<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgo40RogVdAEbzjFNLznElPbshjctC9Nw&callback=myMap">
</script>


<!--
        // script.src = 'restaurants-casvp.json';
        //         document.getElementsByTagName('head')[0].appendChild(script);
        //
        // window.eqfeed_callback = function(results) {
        //         for (var i = 0; i < results.features.length; i++) {
        //           var coords = results.features[i].geometry.coordinates;
        //           var latLng = new google.maps.LatLng(coords[1],coords[0]);
        //           var marker = new google.maps.Marker({
        //             position: latLng,
        //             map: map
        //           });
        //         } --> -->


    </div>
    <div class="poett">


    Vous pouvez en profiter dans de nombreux <a href="https://www.tripadvisor.fr/Restaurants-g187147-Paris_Ile_de_France.html">restaurants</a> ici.

    Et à travers le site <a href="https://www.mapado.com/paris/bucket-activites-aujourdhui/">aujourd'hui</a>

    Vous apprécierez la vie de Paris.
    </div>

    <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://jungminlee.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
 <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://jungminlee.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </body>
</html>
