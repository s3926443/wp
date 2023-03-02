<?php
require('./tools.php');
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Current Bookings</title>

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

    <?php
    debugModule();
    printMyCode();
    ?>
</body>

<script src="./script.js"></script>

</html>