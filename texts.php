<?php
if (file_exists($_GET["u"] . ".txt")) {
    echo "<pre>" . file_get_contents($_GET["u"] . ".txt") . "</pre>";
    echo "<script>window.scrollTo(0,document.body.scrollHeight);</script>";
} else {
    file_put_contents($_GET["u"] . ".txt", "");
}
?>