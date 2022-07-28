<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <title>HeyGirl</title>
  <link rel="stylesheet" href="/css/heyGirl.css" type="text/css">
  <script defer src="girl.js"></script>
  <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlzkDEVv-Lo04jWf8u6sqBUjRE7fEXIx8&callback=initMap">
  </script>

  <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      const uluru = {
        lat: -25.344,
        lng: 131.036
      };
      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
      });
      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: uluru,
        map: map,
      });
    }
  </script>

</head>

<body>


  <header>
    <center>
      <h2> Welcome To The Black Parade</h2>
    </center>
  </header>
  <h1> Hey Girl!! </h1>

  <p> We did it girl </p>
  <p id="greeting"></p>
  <p id="day"></p>
  <p id="forEach"></p>



  <?php
  $feelings = "";
  $favoriteSong = "";
  ?>

  <form>



    <div id=sideNote>

      <img src=>
    </div>
  </form>

</body>

<footer>
  <center>
    <h2>Brought to you by Kaporsha Alexander</h2>
  </center>
</footer>

</html>