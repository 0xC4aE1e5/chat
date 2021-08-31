<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #frame {
            height: 90vh;
        }
    </style>
</head>
<body>
<?php
    if (isset($_GET["b"])) {
        file_put_contents($_GET["t"] . ".txt", $_GET["u"] . ": " . str_replace("<", "", $_GET["m"]) . "\n", FILE_APPEND);
        header("Refresh: 0; messages.php?u=" . $_GET["u"]);
    }
?>
<form action="messages.php">
    <input type="hidden" name="b">
    <iframe src=<?php
        echo '"texts.php?u=' . $_GET["u"] . '"'
    ?> frameborder="0" width="100%" id="frame"></iframe>
    <br>
    <input type="text" name="t" placeholder="username">
    <input type="text" name="m" placeholder="message">
    <input type="hidden" name="u" value=<?php echo '"' . $_GET["u"] . '"' ?>>
    <input type="submit" value="Send">
</form>
</body>
</html>