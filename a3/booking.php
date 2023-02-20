<?php
require('./tools.php') ;
include './post-validation.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Booking Page</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Quicksand&display=swap"
    rel="stylesheet">
</head>

<body>

  <header>
    <div>
      <h1><img src="../../media/cinema_logo.png" alt=""><br />Lunardo Cinema</h1>
    </div>
  </header>

  <nav>
    <div>
      <ul>
        <li><a href="./index.php">Home</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <h2>Avatar: The Way Of Water</h2>
    <div class="movie-info">
      <p>
        Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat
        returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race
        to protect their home.
      </p>
      <img class="rating" src="../../media/m-rating.png" alt="M rating">
    </div>

    <h3>Featuring</h3>
    <ul>
      <li>Sam Worthington</li>
      <li>Zoe Saldana</li>
      <li>Sigourney Weaver</li>
    </ul>
    <h3>Trailer</h3>
    <iframe src="https://www.youtube.com/embed/d9MyW72ELq0" title="Avatar: The Way of Water | Official Trailer"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen>
    </iframe>

    <form action="./booking.php" method="post" onsubmit="return validate()">
      <h2>Book Here</h2>

      <input type="hidden" id="movieName" name="movie" value="ACT">

      <h3>Adult</h3>
      <label for="seatsSta">Standard:</label>
      <select name="seats[STA]" id="seatsSta" data-fullprice="21.5" data-discprice="16" class="seats">
        <option value="">Please Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>

      <label for="seatsFca">First Class:</label>
      <select name="seats[FCA]" id="seatsFca" data-fullprice="31" data-discprice="25" class="seats">
        <option value="">Please Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>

      <h3>Concession</h3>
      <label for="seatsStp">Standard:</label>
      <select name="seats[STP]" id="seatsStp" data-fullprice="19" data-discprice="14.5" class="seats">
        <option value="">Please Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>

      <label for="seatsFcp">First Class:</label>
      <select name="seats[FCP]" id="seatsFcp" data-fullprice="28" data-discprice="23.5" class="seats">
        <option value="">Please Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>

      <h3>Child</h3>
      <label for="seatsStc">Standard:</label>
      <select name="seats[STC]" id="seatsStc" data-fullprice="17.5" data-discprice="13" class="seats">
        <option value="">Please Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>

      <label for="seatsFcc">First Class:</label>
      <select name="seats[FCC]" id="seatsFcc" data-fullprice="25" data-discprice="22" class="seats">
        <option value="">Please Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>

      <h3>Session</h3>
      <input type="radio" name="day" id="MON" value="MON" data-pricing="discprice" required>
      <label class="session" for="MON">MONDAY<br>9PM</label>
      <input type="radio" name="day" id="TUE" value="TUE" data-pricing="fullprice">
      <label class="session" for="TUE">TUESDAY<br>9PM</label>
      <input type="radio" name="day" id="WED" value="WED" data-pricing="fullprice">
      <label class="session" for="WED">WEDNESDAY<br>9PM</label>
      <input type="radio" name="day" id="THU" value="THU" data-pricing="fullprice">
      <label class="session" for="THU">THURSDAY<br>9PM</label>
      <input type="radio" name="day" id="FRI" value="FRI" data-pricing="fullprice">
      <label class="session" for="FRI">FRIDAY<br>9PM</label>
      <input type="radio" name="day" id="SAT" value="SAT" data-pricing="fullprice">
      <label class="session" for="SAT">SATURDAY<br>6PM</label>
      <input type="radio" name="day" id="SUN" value="SUN" data-pricing="fullprice">
      <label class="session" for="SUN">SUNDAY<br>6PM</label>

      <h3>Your Details</h3>
      <div class="user-details">
        <label for="userName">Your Name:</label><br>
        <input type="text" name="user[name]" id="userName" required><br>
        <label for="email">Your Email:</label><br>
        <input type="text" name="user[email]" id="email" required><br>
        <label for="mobile"> Your Phone Number:</label><br>
        <input type="text" name="user[mobile]" id="mobile" required><br>
      </div>
      <h3 id="totalPrice">Total Price: </h3>
      <input type="submit" value="Book">
    </form>
  </main>
  <footer>
    <div class="contact-wrapper">
      <div class=" contact">
        <p>Email: Lunardo@Lunardo.com.au</p>
      </div>
      <div class="contact">
        <p>Mobile: 0404123456</p>
      </div>
      <div class="contact">
        <p>Address: 10 George street, Sydney, 2000</p>
      </div>
    </div>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Mitchell Waghorn, s3629443 <a href="https://github.com/s3926443/wp">github</a>. Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>
  <?php 
  debugModule(); 
  printMyCode();
  ?>
</body>
<script src='./script.js'></script>
</html>