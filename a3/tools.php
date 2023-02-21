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
function getContent() {
  $content = $_GET['content_id'];
  return $content;
}

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
      'time' => '9pm',
      'price' => 'discprice'
      ],
      'tue' => [
        'time' => '9pm',
        'price' => 'fullprice'
        ],
      'wed' => [
        'time' => '9pm',
        'price' => 'fullprice'
        ],
      'thu' => [
        'time' => '9pm',
        'price' => 'fullprice'
        ],
      'fri' => [
        'time' => '9pm',
        'price' => 'fullprice'
        ],
      'sat' => [
        'time' => '6pm',
        'price' => 'fullprice'
        ],
      'sun' => [
        'time' => '6pm',
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
        'time' => '12pm',
        'price' => 'discprice'
        ],
      'thu' => [
        'time' => '12pm',
        'price' => 'discprice'
        ],
      'fri' => [
        'time' => '12pm',
        'price' => 'discprice'
        ],
      'sat' => [
        'time' => '3pm',
        'price' => 'fullprice'
        ],
      'sun' => [
        'time' => '3pm',
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
      'time' => '12pm',
      'price' => 'discprice'
      ],
      'tue' => [
        'time' => '12pm',
        'price' => 'discprice'
        ],
      'wed' => [
        'time' => '6pm',
        'price' => 'fullprice'
        ],
      'thu' => [
        'time' => '6pm',
        'price' => 'fullprice'
        ],
      'fri' => [
        'time' => '6pm',
        'price' => 'fullprice'
        ],
      'sat' => [
        'time' => '12pm',
        'price' => 'fullprice'
        ],
      'sun' => [
        'time' => '12pm',
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
      'time' => '6pm',
      'price' => 'discprice'
      ],
      'tue' => [
        'time' => '6pm',
        'price' => 'fullprice'
        ],
      'sat' => [
        'time' => '9pm',
        'price' => 'fullprice'
        ],
      'sun' => [
        'time' => '9pm',
        'price' => 'fullprice'
      ]
    ]
  ]
];

function redirectUser() {
  $validPage = false;
  foreach(array_keys(movies) as $movie) {
    if (getContent() === $movie) {
      $validPage = true;
    }
  }

  if ($validPage === false) {
    header('Location: '.'./index.php'); die();
  }
}

function getTitle() {
  echo movies[getContent()]['title'];
}
function getDesc() {
  echo movies[getContent()]['desc'];
}

function getRating() {
  echo movies[getContent()]['rating'];
}

function getFeatured() {
  echo "<ul>";
  foreach(movies[getContent()]['featured'] as $actor) {
    echo "<li>".$actor."</li>";
  }
  echo "</ul>";
}

function getVideo() {
  echo movies[getContent()]['video'];
}
?>