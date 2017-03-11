<?php

$dbhost = "b9iiuvuom-mysql.services.clever-cloud.com";
$dbuser = "uzgqipio57qzxvht";
$dbpass = "KAVdSNJYGnU9U9VUs2X";
$dbname = "b9iiuvuom";
$display_errors = false;
$disable_admin_panel = false;

$connection_options = array(
    'disable_curl' => false,
    'local_cafile' => false,
    'force_ipv4' => false    // cURL only
);

// dsn - Data Source Name
// if you use MySQL, leave it as is
// more information:
// http://php.net/manual/en/pdo.construct.php
$dbdsn = "mysql:host=$dbhost;dbname=$dbname";
