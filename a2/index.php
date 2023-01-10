<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Home Page</title>

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
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#seats-and-prices">Seats & Prices</a></li>
        <li><a href="#now-showing">Now Showing</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <div class="about-us" id="about-us">
      <h2>About Us</h2>
      <p>
        Here at Lunardo we take pride in offering a truly immersive cinematic experience perfect for any viewer
        whether you are a movie buff or just going out with friends or family.
        <br /><br />
        d
      </p>
    </div>
    <div class="seats-and-prices" id="seats-and-prices"></div>
    <div class="now-showing" id="now-showing"></div>
  </main>

  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Mitchell Waghorn, s3926443. Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>

</html>