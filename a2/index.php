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
      <h1>Lunardo Cinema<br /><img src="../../media/cinema_logo.png" alt=""></h1>
    </div>
  </header>

  <nav>
    <div>
      <ul>
        <li>About Us</li>
        <li>Seats & Prices</li>
        <li>Now Showing</li>
      </ul>
    </div>
  </nav>

  <main>
    <article id='Website Under Construction'>
      <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
      <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
    </article>
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