<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <title>HeyGirl</title>
  <link rel="stylesheet" href="/css/heyGirl.css" type="text/css">
  <script defer src="girl.js"></script>

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
      <h1> To Do List</h1>
      <ul>
        <li>Practice Code</li>
        <li>Apply for Jobs</li>
        <li>Save Money</li>
      </ul>

      <input type="text" id="new task">
      <button type = "submit" onClick="newTask()">Add New</button>


    </div>
  </form>

</body>

<footer>
  <center>
    <h2>Brought to you by Kaporsha Alexander</h2>
  </center>
</footer>

</html>