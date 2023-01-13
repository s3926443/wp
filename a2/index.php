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
      <h1><img src="../../media/cinema_logo.png" alt=""><br>Lunardo Cinema</h1>
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
        <br><br>
        We are happy to announce that we have now just reopened with extensive improvements and renovations to again
        provide an amazing experience to all movie goers. Among the improvements you will be happy to hear we have new
        and improved seating which not only includes standard seats but also brand new reclinable first class seats
        for
        maximum comfort.
        <br><br>
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
          <td>FCA</td>
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
          <td>FCA</td>
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
      <a class="now-showing-anchor" id="now-showing"></a>
      <h2>Now Showing</h2>
      <div class="movie-section">
        <div class="movie-panel">
          <div class="inner">
            <div class="front">
              <img class="poster" src="../../media/avatar-poster.png" alt="Avatar the way of water movie poster">
              <p>
                Avatar: The Way Of Water
                <br><br>
                <img class="rating" src="../../media/m-rating.png" alt="M">
              </p>

            </div>
            <div class="back">
              <div class="synopsis">
                <h3>Synopsis</h3>
                <p>
                  Jake Sully lives with his newfound family formed on the extrasolar moon Pandora.
                  Once a familiar threat returns to finish what was previously started, Jake must
                  work with Neytiri and the army of the Na'vi race to protect their home.
                </p>
              </div>
              <div class="booking">
                <h3>Bookings Times</h3>
                <ul>
                  <li>Mon-Tue - 9pm</li>
                  <li>Wed-Fri - 9pm</li>
                  <li>Sat-Sun - 6pm</li>
                </ul>
              </div>
              <div class="booking-button">
                <button ><a href="./booking.php">Book Now</a></button>
              </div>
            </div>
          </div>
        </div>
        <div class="movie-panel">
          <div class="inner">
            <div class="front">
              <img class="poster" src="../../media/puss-poster.png" alt="puss in boots the last wish poster">
              <p>
                Puss In Boots: The Last Wish
                <br><br>
                <img class="rating" src="../../media/pg-rating.png" alt="PG">
              </p>
            </div>
            <div class="back">
              <div class="synopsis">
                <h3>Synopsis</h3>
                <p>
                  Puss in Boots discovers that his passion for adventure has taken its toll: he has
                  burned through eight of his nine lives. Puss sets out on an epic journey to find the
                  mythical Last Wish and restore his nine lives.
                </p>
              </div>
              <div class="booking">
                <h3>Bookings Times</h3>
                <ul>
                  <li>Mon-Tue - 12pm</li>
                  <li>Wed-Fri - 6pm</li>
                  <li>Sat-Sun - 12pm</li>
                </ul>
              </div>
              <div class="booking-button">
                <button><a href="./booking.php">Book Now</a></button>
              </div>
            </div>
          </div>
        </div>

        <div class="movie-panel">
          <div class="inner">
            <div class="front">
              <img class="poster" src="../../media/margrete-poster.png" alt="margrete queen of the north poster">
              <p>
                Margrete: Queen of the North
                <br><br>
                <img class="rating" src="../../media/ma15.png" alt="MA15+">
              </p>
            </div>
            <div class="back">
              <div class="synopsis">
                <h3>Synopsis</h3>
                <p>
                  1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik.
                  But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that
                  could shatter her life's work: the Kalmar Union.
                </p>
              </div>
              <div class="booking">
                <h3>Bookings Times</h3>
                <ul>
                  <li>Mon-Tue - 6pm</li>
                  <li>Wed-Fri - No Showings</li>
                  <li>Sat-Sun - 10pm</li>
                </ul>
              </div>
              <div class="booking-button">
                <button><a href="./booking.php">Book Now</a></button>
              </div>
            </div>
          </div>
        </div>

        <div class="movie-panel">
          <div class="inner">
            <div class="front">
              <img class="poster" src="../../media/weird-poster.png" alt="weird the al yankovic poster">
              <p>
                Weird: The Al Yankovic story
                <br><br>
                Unrated
              </p>
            </div>
            <div class="back">
              <div class="synopsis">
                <h3>Synopsis</h3>
                <p>
                  Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like
                  'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.
                </p>
              </div>
              <div class="booking">
                <h3>Bookings Times</h3>
                <ul>
                  <li>Mon-Tue - No Showings</li>
                  <li>Wed-Fri - 12pm</li>
                  <li>Sat-Sun - 3pm</li>
                </ul>
              </div>
              <div class="booking-button">
                <button><a href="./booking.php">Book Now</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
        <p>10 George street, Sydney, 2000</p>
      </div>
    </div>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Mitchell Waghorn, s3926443. <a href="https://github.com/s3926443/wp" target="_blank">github</a> Last
      modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>

</html>