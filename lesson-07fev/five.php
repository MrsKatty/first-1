<?php
    if (!headers_sent ()) {
        header('location: https://www.wikipedia.org/');
        exit;
    }
    echo "hello slava";
?>
