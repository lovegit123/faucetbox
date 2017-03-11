<?php

$dbhost = "bp9rxchpn.mysql.clvrcld.net";
$dbuser = "ud8jvxa9wwxtycuo";
$dbpass = "C2AR92OT3P4wrE0ZVWT4";
$dbname = "bp9rxchpn";
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
