<?php
require('./tools.php');
require('./post-validation.php');
redirectUser();
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
    <h2>
      <?= getTitle() ?>
    </h2>
    <div class="movie-info">
      <p>
        <?= getDesc() ?>
      </p>
      <?= getRating() ?>
    </div>

    <h3>Featuring</h3>
    <?= getFeatured() ?>
    <h3>Trailer</h3>
    <?= getVideo() ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?content_id=".getContent())?>" method="post" onsubmit="return validate(); ret">
      <h2>Book Here</h2>

      <input type="hidden" id="<?= getTitle() ?>" name="movie" value="<?= getContent() ?>">

      <h3>Adult</h3>
      <label for="seatsSta">Standard:</label>
      <select name="seats[STA]" id="seatsSta" data-fullprice="21.5" data-discprice="16" class="seats">
        <?= generateOptions() ?>
      </select>

      <label for="seatsFca">First Class:</label>
      <select name="seats[FCA]" id="seatsFca" data-fullprice="31" data-discprice="25" class="seats">
        <?= generateOptions() ?>
      </select>

      <h3>Concession</h3>
      <label for="seatsStp">Standard:</label>
      <select name="seats[STP]" id="seatsStp" data-fullprice="19" data-discprice="14.5" class="seats">
        <?= generateOptions() ?>
      </select>

      <label for="seatsFcp">First Class:</label>
      <select name="seats[FCP]" id="seatsFcp" data-fullprice="28" data-discprice="23.5" class="seats">
        <?= generateOptions() ?>
      </select>

      <h3>Child</h3>
      <label for="seatsStc">Standard:</label>
      <select name="seats[STC]" id="seatsStc" data-fullprice="17.5" data-discprice="13" class="seats">
        <?= generateOptions() ?>
      </select>

      <label for="seatsFcc">First Class:</label>
      <select name="seats[FCC]" id="seatsFcc" data-fullprice="25" data-discprice="22" class="seats">
        <?= generateOptions() ?>
      </select>

      <h3>Session</h3>
      <?php generateSession() ?>

      <h3>Your Details</h3>
      <div class="user-details">
        <label for="userName">Your Name:</label><br>
        <input type="text" name="user[name]" id="userName"
          value="<?php if (isset($_POST['user']['name'])) {
            echo $_POST['user']['name'];
          } ?>" required><br>
        <label for="email">Your Email:</label><br>
        <input type="text" name="user[email]" id="email" value="<?php if (isset($_POST['user']['email'])) {
            echo $_POST['user']['email'];
          } ?>" required><br>
        <label for="mobile"> Your Phone Number:</label><br>
        <input type="text" name="user[mobile]" id="mobile" value="<?php if (isset($_POST['user']['mobile'])) {
            echo $_POST['user']['mobile'];
          } ?>" required><br>
      </div>
      <div id="remember-me">
        <button type="button" class=remember-me-button id="remember-me-button">Remember Me</button>
      </div>
      <h3 id="totalPrice">Total Price: </h3>
      <input type="submit" value="Book" href="./booking.php?content_id=ACT">
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
  if (!empty($_POST)){
    $postErrors = validateBooking();
  }
  ?>
</body>
<script src='./script.js'></script>

</html>