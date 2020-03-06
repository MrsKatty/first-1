<?php

function marcdown($text_md)
{
    $pattern = [
        '/\*\*(.*?)\*\*/',
        '/\*(.*?)\*/',
        '/ht.*/'
    ];

    $text = [
        "<i>$1<i>",
        "<b>$1<b>",
        "<a href='$1'>$1</a>"
    ];

    return preg_replace(
        $pattern,
        $text,
        $text_md
    );
}



function url($link)
{
    $pattern = [
        // '/https\:\/\/.{1,}/',
        '/https\:\/\/.{1,}\.png/',
    ];

    $text = [
        "<img src='$0'>",
        //"<a href='$0'>$0</a>"
    ];

    return preg_replace(
        $pattern,
        $text,
        $link
    );
}
