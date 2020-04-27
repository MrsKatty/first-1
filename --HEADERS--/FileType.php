<?php
//тип файла
header('Content-type: application/pdf');
// имя файла
header('Content-Disposition: attachment; filename="slava.pdf"');
//файл
readfile('file.pdf');
?>
