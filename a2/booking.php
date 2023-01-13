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
  </main>
  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>
  <aside id="debug">
    <hr>
    <h3>Debug Area</h3>
    <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
  </aside>

</body>

</html>