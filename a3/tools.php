<?php
session_start();
// Section 3.2 Assignmnet Background
//Debugging added to bottoms of index.php and booking.php


function debugModule()
{
  echo "<hr><pre>";
  echo 'GET Contains:';
  print_r($_GET);
  echo 'POST Contains:';
  print_r($_POST);
  echo 'SESSION Contains:';
  print_r($_SESSION);
  echo "</pre><hr>";
}

function printMyCode()
{
  $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre id='myCode'><ol>";
  foreach ($allLinesOfCode as $oneLineOfCode) {
    echo "<li>" . rtrim(htmlentities($oneLineOfCode)) . "<br></li";
  }
  echo "</ol></pre>";
}

function php2js($arr, $arrName)
{
  $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
  echo <<<"CDATA"
  <script>
  /* Variable generated with Trev's handy php2js() function */
  var $arrName = $arrJSON;
  </script>
  CDATA;
}

/* Put your PHP functions and modules here.
Many will be provided in the teaching materials,
keep a look out for them!
*/
function getContent()
{
  $content = $_GET['content_id'];
  return $content;
}

//pricing
const seatPricing = [
  'sta' => [
    'fullprice' => 21.5,
    'discprice' => 16.00
  ],
  'stp' => [
    'fullprice' => 19.00,
    'discprice' => 14.50
  ],
  'stc' => [
    'fullprice' => 17.50,
    'discprice' => 13.00
  ],
  'fca' => [
    'fullprice' => 31.00,
    'discprice' => 25.00
  ],
  'fcp' => [
    'fullprice' => 28.00,
    'discprice' => 23.50
  ],
  'fcc' => [
    'fullprice' => 25.00,
    'discprice' => 22.00
  ],
];

// Associative array containing movie data
const movies = [
  'ACT' => [
    'title' => 'Avatar: The Way Of Water',
    'desc' => "Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat
    returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race
    to protect their home.",
    'rating' => '<img class="rating" src="../../media/m-rating.png" alt="M rating">',
    'featured' => ['Sam Worthington', 'Zoe Saldana', 'Sigourney Weaver'],
    'video' => '<iframe src="https://www.youtube.com/embed/d9MyW72ELq0" title="Avatar: The Way of Water | Official Trailer"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen>
    </iframe>',
    'poster' => '<img class="poster" src="../../media/avatar-poster.png" alt="Avatar the way of water movie poster">',
    'sessions' => [
      'mon' => [
        'time' => '9PM',
        'price' => 'discprice'
      ],
      'tue' => [
        'time' => '9PM',
        'price' => 'fullprice'
      ],
      'wed' => [
        'time' => '9PM',
        'price' => 'fullprice'
      ],
      'thu' => [
        'time' => '9PM',
        'price' => 'fullprice'
      ],
      'fri' => [
        'time' => '9PM',
        'price' => 'fullprice'
      ],
      'sat' => [
        'time' => '6PM',
        'price' => 'fullprice'
      ],
      'sun' => [
        'time' => '6PM',
        'price' => 'fullprice'
      ]
    ]
  ],
  'RMC' => [
    'title' => 'Weird: The Al Yankovic Story',
    'desc' => 'Explores every facet of Yankovic\'s life, from his meteoric rise
     to fame with early hits like \'Eat It\' and \'Like a Surgeon\' to his 
     torrid celebrity love affairs and famously depraved lifestyle.',
    'rating' => null,
    'featured' => ['Diedrich Bader', 'Daniel Radcliffe', 'Lin-Manuel Miranda'],
    'video' => '<iframe width="1227" height="690" src="https://www.youtube.com/embed/cCNKdJ2CIJk" 
      title="WEIRD: The Al Yankovic Story - official trailer"
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
      web-share" allowfullscreen>
    </iframe>',
    'poster' => '<img class="poster" src="../../media/weird-poster.png" alt="weird the al yankovic poster">',
    'sessions' => [
      'wed' => [
        'time' => '12PM',
        'price' => 'discprice'
      ],
      'thu' => [
        'time' => '12PM',
        'price' => 'discprice'
      ],
      'fri' => [
        'time' => '12PM',
        'price' => 'discprice'
      ],
      'sat' => [
        'time' => '3PM',
        'price' => 'fullprice'
      ],
      'sun' => [
        'time' => '3PM',
        'price' => 'fullprice'
      ]
    ]
  ],
  'FAM' => [
    'title' => 'Puss In Boots: The Last Wish',
    'desc' => 'When Puss in Boots discovers that his passion for adventure has taken its toll 
    and he has burned through eight of his nine lives, he launches an epic journey to restore 
    them by finding the mythical Last Wish.',
    'rating' => '<img class="rating" src="../../media/pg-rating.png" alt="PG">',
    'featured' => ['Antonio Banderas', 'Salma Hayek', 'Harvey Guillen'],
    'video' => '<iframe width="1227" height="690" src="https://www.youtube.com/embed/XDEvN4UeAZw" 
      title="Puss in Boots: The Last Wish | Official Trailer 2" 
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      allowfullscreen>
    </iframe>',
    'poster' => '<img class="poster" src="../../media/puss-poster.png" alt="puss in boots the last wish poster">',
    'sessions' => [
      'mon' => [
        'time' => '12PM',
        'price' => 'discprice'
      ],
      'tue' => [
        'time' => '12PM',
        'price' => 'discprice'
      ],
      'wed' => [
        'time' => '6PM',
        'price' => 'fullprice'
      ],
      'thu' => [
        'time' => '6PM',
        'price' => 'fullprice'
      ],
      'fri' => [
        'time' => '6PM',
        'price' => 'fullprice'
      ],
      'sat' => [
        'time' => '12PM',
        'price' => 'fullprice'
      ],
      'sun' => [
        'time' => '12PM',
        'price' => 'fullprice'
      ]
    ]
  ],
  'AHF' => [
    'title' => 'Margrete: Queen of the North',
    'desc' => '1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. 
    But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could 
    shatter her life\'s work: the Kalmar Union.',
    'rating' => '<img class="rating" src="../../media/ma15.png" alt="MA15+">',
    'featured' => ['Trine Dyrholm', 'Soren Malling', 'Morten Hee Andersen'],
    'video' => '<iframe width="1227" height="690" src="https://www.youtube.com/embed/-7OCX98JgGk" 
      title="Margrete Queen Of The North - Official Trailer" 
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      allowfullscreen>
    </iframe>',
    'poster' => '<img class="poster" src="../../media/margrete-poster.png" alt="margrete queen of the north poster">',
    'sessions' => [
      'mon' => [
        'time' => '6PM',
        'price' => 'discprice'
      ],
      'tue' => [
        'time' => '6PM',
        'price' => 'fullprice'
      ],
      'sat' => [
        'time' => '9PM',
        'price' => 'fullprice'
      ],
      'sun' => [
        'time' => '9PM',
        'price' => 'fullprice'
      ]
    ]
  ]
];


// Ensures the user is on a valid booking page. If not redirects the user to index.php
function redirectUser()
{
  $validPage = false;
  foreach (array_keys(movies) as $movie) {
    if (getContent() === $movie) {
      $validPage = true;
    }
  }

  if ($validPage === false) {
    header('Location: ' . './index.php');
    die();
  }
}

function getTitle()
{
  echo movies[getContent()]['title'];
}
function getDesc()
{
  echo movies[getContent()]['desc'];
}

function getRating()
{
  echo movies[getContent()]['rating'];
}

function getFeatured()
{
  echo "<ul>";
  foreach (movies[getContent()]['featured'] as $actor) {
    echo "<li>" . $actor . "</li>";
  }
  echo "</ul>";
}

function getVideo()
{
  echo movies[getContent()]['video'];
}

function getPoster()
{
  echo movies[getContent()]['poster'];
}

// Generates the session buttons on the booking page as per the schedule of the movies showings
function generateSession()
{
  $i = 0;
  $day = '';

  foreach (movies[getContent()]['sessions'] as $days) {
    if (array_keys(movies[getContent()]['sessions'])[$i] === 'mon') {
      $day = 'MONDAY';
    } else if (array_keys(movies[getContent()]['sessions'])[$i] === 'tue') {
      $day = 'TUESDAY';
    } else if (array_keys(movies[getContent()]['sessions'])[$i] === 'wed') {
      $day = 'WEDNESDAY';
    } else if (array_keys(movies[getContent()]['sessions'])[$i] === 'thu') {
      $day = 'THURSDAY';
    } else if (array_keys(movies[getContent()]['sessions'])[$i] === 'fri') {
      $day = 'FRIDAY';
    } else if (array_keys(movies[getContent()]['sessions'])[$i] === 'sat') {
      $day = 'SATURDAY';
    } else if (array_keys(movies[getContent()]['sessions'])[$i] === 'sun') {
      $day = 'SUNDAY';
    }

    echo '<input type="radio" name="day" id="' . array_keys(movies[getContent()]['sessions'])[$i] .
      '" value="' . array_keys(movies[getContent()]['sessions'])[$i] . '" data-pricing="' . $days['price'] . '" required>';
    echo '<label class="session" for="' . array_keys(movies[getContent()]['sessions'])[$i] . '">' . $day . '<br>' . $days['time'] . '</label>';
    $i++;
  }
}

function generateOptions()
{
  echo '<option value="">Please Select</option>';
  for ($i = 1; $i <= 10; $i++) {
    echo '<option value="' . $i . '">' . $i . '</option>';
  }
}

function makeBooking()
{
  $date = date('m/d/Y');
  $name = $_SESSION['user']['name'];
  $email = $_SESSION['user']['email'];
  $mobile = $_SESSION['user']['mobile'];
  $movie = $_SESSION['movie'];
  $day = $_SESSION['day'];
  $time = movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['time'];
  $numSTA = $_SESSION['seats']['STA'];
  $priceSTA = round((int) $numSTA * seatPricing['sta'][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2);
  $numSTP = $_SESSION['seats']['STP'];
  $priceSTP = round((int) $numSTP * seatPricing['stp'][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2);
  $numSTC = $_SESSION['seats']['STC'];
  $priceSTC = round((int) $numSTC * seatPricing['stc'][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2);
  $numFCA = $_SESSION['seats']['FCA'];
  $priceFCA = round((int) $numFCA * seatPricing['fca'][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2);
  $numFCP = $_SESSION['seats']['FCP'];
  $priceFCP = round((int) $numFCP * seatPricing['fcp'][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2);
  $numFCC = $_SESSION['seats']['FCC'];
  $priceFCC = round((int) $numFCC * seatPricing['fcc'][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2);
  $total = round($priceSTA + $priceSTP + $priceSTC + $priceFCA + $priceFCP + $priceFCC, 2);
  $gst = round($total * 0.1, 2);


  $bookingArr = [
    $date,
    $name,
    $email,
    $mobile,
    $movie,
    $day,
    $time,
    $numSTA,
    $priceSTA,
    $numSTP,
    $priceSTP,
    $numSTC,
    $priceSTC,
    $numFCA,
    $priceFCA,
    $numFCP,
    $priceFCP,
    $numFCC,
    $priceFCC,
    $total,
    $gst
  ];
  $fp = fopen('./bookings.txt', 'a');
  fputcsv($fp, $bookingArr);
  fclose($fp);
}

function printReciept()
{
  $totalPrice = 0;
  echo '<hr><p>Name: ' . $_SESSION['user']['name'] . '</p>
  <p>Email: ' . $_SESSION['user']['email'] . '</p>
  <p>Mobile: ' . $_SESSION['user']['mobile'] . '</p><hr>
  <ul>
  <li><strong>Number of Seats</strong></li><li><strong>Type of Seat</strong></li><li><strong>Price</strong></li>';
  foreach ($_SESSION['seats'] as $seatType => $seatNum) {
    if (!empty($seatNum)) {
      $totalPrice += round($seatNum * seatPricing[strtolower($seatType)][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2);
      echo '<li>' . $seatNum . '</li><li>' . $seatType . '</li><li>$'
        . round($seatNum * seatPricing[strtolower($seatType)][movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['price']], 2) .
        '</li>';
    }
  }
  echo '<li></li><li></li><li><strong>TOTAL</strong></li>
  <li></li><li></li><li>$' . $totalPrice . '</li>
  <li></li><li></li><li><strong>GST</strong></li>
  <li></li><li></li><li>$' . $totalPrice * 0.1 . '</li>
  </ul>';
}

function printTicket()
{
  foreach ($_SESSION['seats'] as $seatType => $seatNum) {
    if (!empty($seatNum)) {
      for ($i = 1; $i <= $seatNum; $i++) {
        echo
          '<div class="ticket">
        <header>
        <h1>Lunardo Cinema<br>' . movies[$_SESSION['movie']]['title'] . '</h1>
        </header>
        <div class="ticket-info">
        <p class="info"><strong>Seat</strong><br>' . $seatType . ' ' . $i . '</p>
        <img class="qr" src="../../media/qr-code.jpg" alt="fake qr code">
        <p class="info"><strong>When</strong><br>' . strtoupper($_SESSION['day']) . ' ' .
          movies[$_SESSION['movie']]['sessions'][$_SESSION['day']]['time'] . '</p>
        
        </div>
      </div>';
      }
    }

  }

}
?>