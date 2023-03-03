<?php
require('./tools.php');
if (empty($_SESSION)) {
    header('Location: ' . './index.php');
    die;
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Receipt</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Quicksand&display=swap"
        rel="stylesheet">
</head>

<body class="receipt">
    <header>
        <h1>Lunardo Cinema<br>Receipt</h1>
    </header>
    <article>
        <?= printReciept() ?>
    </article>
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
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <div class="ticket-container">
        <?= printTicket() ?>
    </div>
</body>
<?php
debugModule();
printMyCode();
?>