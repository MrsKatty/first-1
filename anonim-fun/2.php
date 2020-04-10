<?php

function fun($name) {
    $name();
}

fun(function() {
    echo "hello";
});