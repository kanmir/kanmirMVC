<?php
//DB params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'kmvc');

//Base path
define('BASEPATH', dirname(dirname(dirname(__FILE__))));
//App Root
define('APPROOT', dirname(dirname(__FILE__)));
//URL Root
define('URLROOT', baseUrl());
//Site name
define('SITENAME', 'KanmirMVC');
//App language
define('APPLANG', 'en');