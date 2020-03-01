<?php

if (preg_match("/редиска|питон/ui", $_POST['filtr'])) {
    echo "Не ругайся!";
}else {
    echo "Молодец!";
}

?>