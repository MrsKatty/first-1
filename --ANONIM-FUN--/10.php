<?php

//замыкание2
// & по ссылке

$msg = "hello";

$test = function()use(&$msg){
    echo $msg;
};

$msg="bye";

$test();

?>