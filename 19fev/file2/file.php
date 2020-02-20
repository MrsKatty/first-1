<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
copy($_FILES['userfile']['tmp_name'], "file\\" . $_FILES['userfile']['name']);
}

$arr = scandir("file");


// foreach ($arr as $value) {
//     echo "<a href=\"file/ . $value\">$value</a><br>";
// }

 for ($i=2; $i < count($arr); $i++) { 

    $extension = explode(".", $arr[$i]);

    if ($extension[1] == "docx") {
        echo "<a href='file\\$arr[$i]'>$arr[$i]</a> " .
         " <img src='docx.png' width='16' height='16'>" ."<br>";
    }
    
    elseif ($extension[1] == "pdf") {
        echo "<a href='file\\$arr[$i]'>$arr[$i]</a> " .
        " <img src='pdf.png' width='16' height='16'>" ."<br>";
    }
    else {
        echo "<a href='file\\$arr[$i]'>$arr[$i]</a> " . " (Неизвестный формат файла)"."<br>";
    }
   
 }
 
