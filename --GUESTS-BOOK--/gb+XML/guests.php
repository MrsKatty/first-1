<?php
    include ("fun_guests_book.php");
    save_guests_book("guests_book.xml", $_POST['mess'], $_POST['name'], date('d-m-y h:i:s'));

    echo "<pre>";
    print_r(read_guests_book("guests_book.xml"));
