<?php

    function save_guests_book($file, $text, $name, $date) {

    $xml = "<msg><text>$text</text><name>$name</name><date>$date</date></msg>";

    return file_put_contents($file, $xml, FILE_APPEND);
    }


    //******************************


    function read_guests_book($file) {
        $string = file_get_contents($file);
        preg_match_all("/<text>(.*?)<\/text><name>(.*?)<\/name><date>(.*?)<\/date>/ui", $string, $arr_tags);

        $arr_guests_book=[];

        foreach($arr_tags[1] as $key => $value ) {
            $arr_guests_book[$key]['text'] = $value;
            $arr_guests_book[$key]['name'] = $arr_tags[2][$key];
            $arr_guests_book[$key]['date'] = $arr_tags[3][$key];
        }

        return $arr_guests_book;
    }
