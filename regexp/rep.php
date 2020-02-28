<?php

if (preg_match('/^[0-9a-z\-]{1,}@[0-9a-z]{2,}\.[a-z]{2,6}$/i', $_POST['email'])) {
    echo 'корректно';
}
else {
    echo 'не корректно';
}

?>
