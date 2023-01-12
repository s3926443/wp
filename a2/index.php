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
    <div>
      <a class="about-us-anchor" id="about-us"></a>
      <h2>About Us</h2>
      <p>
        Here at Lunardo we take pride in offering a truly immersive cinematic experience perfect for any viewer
        whether you are a movie buff or just going out with friends or family.
        <br /><br />
        We are happy to announce that we have now just reopened with extensive improvements and renovations to again
        provide an amazing experience to all movie goers. Among the improvements you will be happy to hear we have new
        and improved seating which not only includes standard seats but also brand new reclinable first class seats
        for
        maximum comfort.
        <br /><br />
        We have also fitten each and everyone one of our theatres with upgraded Dolby Atmos Sound and 3D Dolby Vision,
        providing again a truly immersive experience.

      </p>
    </div>
    <div class="seats-and-prices">
      <a class="seats-and-prices-anchor" id="seats-and-prices"></a>
      <h2>Seats & Prices</h2>
      <p>
        We now have two new seats in our theatres. One being the Profern Standard which is included in our Standard
        tickets,
        and the other being the Profern Verona which is included with the First class tickets
      </p>
      <div class="image-section">
        <div class="seat-container">
          <img class="seat" src="../../media/Profern-Standard-Twin.png"
            alt="image of the profern standard twin movie seat">
          <p>Profern Standard</p>
        </div>
        <div class="seat-container">
          <img class="seat" src="../../media/Profern-Verona-Twin.png" alt="imgae of the profern verona twin movie seat">
          <p>Profern Verona</p>
        </div>
      </div>
      <h3>Our Prices</h3>
      <table>
        <tr>
          <th>Seat Type</th>
          <th>Seat Code</th>
          <th>Discounted Prices</th>
          <th>Normal Prices</th>
        </tr>
        <tr>
          <td>Standard Adult</td>
          <td>STA</td>
          <td>$16.00</td>
          <td>$21.50
        </tr>
        <tr>
          <td>Standard Concession</td>
          <td>STP</td>
          <td>$14.50</td>
          <td>$19.00</td>
        </tr>
        <tr>
          <td>Standard Child</td>
          <td>STC</td>
          <td>$13.00</td>
          <td>$17.50</td>
        </tr>
        <tr>
          <td>First Class Adult</td>
          <td>FCP</td>
          <td>$25.00</td>
          <td>$31.00</td>
        </tr>
        <tr>
          <td>First Class Concession</td>
          <td>FCP</td>
          <td>$23.50</td>
          <td>$28.00</td>
        </tr>
        <tr>
          <td>First Class Child</td>
          <td>FCC</td>
          <td>$22.00</td>
          <td>$25.00</td>
        </tr>
      </table>
      <p class="discount">
        Discounted pricing is available all weekdays 12:00pm to 5:00pm and all day Monday
      </p>
    </div>
    <div class="now-showing">
      
    </div>
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