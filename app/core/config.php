<?php
define('admin', 1); // quyền admin
define('user', 0); // quyền người dùng thông thường
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DB_NAME', 'uwc2.0');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    
    define('ROOT', 'http://localhost/UWC2.0/my_project_se/public');
    define('APPROOT', dirname(dirname(__FILE__)));
    //define('VIEWSURL', 'http://localhost/assignment-ltw/app/views');
    //definr('')
}
