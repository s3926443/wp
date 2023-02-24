<?php
/* Call this function in the booking page like so:
$postErrors = validateBooking();
If the array is empty, then no errors were generated
*/
function validateBooking()
{
  $errors = []; // new empty array to return multiple error messages

  $username = trim($_POST['user']['name']);
  if ($username == '') {
    $errors['user']['name'] = "Name can't be blank";
  } else if (!preg_match("/^[-A-Za-z '.]{1,64}$/", $username)) {
    $errors['user']['name'] = "Name has invalid characters or is too long";
  }

  $email = trim($_POST['user']['email']);
  if ($email == '') {
    $errors['user']['email'] = "Email can't be blank";
  } else if (!preg_match('/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-.]+$/', $email)) {
    $errors['user']['email'] = "Email has invalid characters";
  }

  $mobile = trim($_POST['user']['mobile']);
  if ($mobile == '') {
    $errors['user']['mobile'] = "Mobile can't be blank";
  } else if (!preg_match('/^(\(04\)|04|\+614)( ?\d){8}$/', $mobile)) {
    $errors['user']['mobile'] = "Mobile has invalid characters or is incorrect length";
  }

  $validMovie = false;
  $allMovies = ['ACT', 'RMC', 'FAM', 'AHF'];
  foreach ($allMovies as $movies) {
    if ($movies === $_POST['movie']) {
      $validMovie = true;
    }
  }
  if (!$validMovie) {
    $errors['movie'] = "Invalid movie type";
  }

  $validDay = false;
  foreach (array_keys(movies[getContent()]['sessions']) as $day) {
    if ($_POST['day'] = $day) {
      $validDay = true;
    }
  }
  if (!$validDay) {
    $errors['day'] = "Movie not shown on this day";
  }

  $seatsArr = array_values($_POST['seats']);
  for ($i = 0; $i < count($seatsArr); $i++) {
    if (!empty($seatsArr[$i])) {
     if (!is_int((int)$seatsArr[$i])) {
        $errors['seats']['type'] = "Seats wrong type";
      } else if ($seatsArr[$i] > 10 || $seatsArr[$i] < 1){
        $errors['seats']['amount'] = "Seats above 10 or below 1";
      }
    }
  }

  $totalSeats = 0;
  for ($i = 0; $i < count($seatsArr); $i++) {
    $totalSeats += (int)$seatsArr[$i];
  }
  if ($totalSeats === 0) {
    $errors['seats']['total'] = "No seats selected";
  }

  return $errors; // empty array -> no errors; populated array -> errors.
}

$postError = validateBooking();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($postError)) {
    $_SESSION = $_POST;
    makeBooking();
  }
} 
?>