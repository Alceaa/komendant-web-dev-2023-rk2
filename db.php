<?php
    define('DB_HOST', 'std-mysql.ist.mospolytech.ru:****'); //Адрес
    define('DB_USER', 'std_****_webrk2'); //Имя пользователя
    define('DB_PASSWORD', '*************'); //Пароль
    define('DB_NAME', 'std_****_webrk2'); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
?>