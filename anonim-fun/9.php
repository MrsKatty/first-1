
<?php

// замыкание!!!!

$msg = "hello";

$test = function()use($msg){
    echo $msg;
};

$msg="bye";

$test();


?>
