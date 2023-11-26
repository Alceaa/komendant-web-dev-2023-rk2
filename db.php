<?php
    define('DB_HOST', 'std-mysql.ist.mospolytech.ru:3306'); //Адрес
    define('DB_USER', 'std_2299_webrk2'); //Имя пользователя
    define('DB_PASSWORD', 'webrk211112316'); //Пароль
    define('DB_NAME', 'std_2299_webrk2'); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
?>