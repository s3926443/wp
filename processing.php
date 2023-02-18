
<h3>$_GET contains:</h3>
<pre><?php print_r($_GET); ?></pre>

<?php $post = print_r($_POST, true);
echo "<h3>\$_POST contains:</h3>
    <pre>
        $post
    </pre>";
?>

<h3>$_COOKIES contains:</h3>
<pre><?php print_r($_COOKIE); ?></pre>

<h3>$_REQUEST contains:</h3>
<pre><?php print_r($_REQUEST); ?></pre>