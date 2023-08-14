<?php

$db_host = 'localhost';
$db_user = 'admin_apibca';
$db_pass = 'Srv.TopMortar1ndonesia!';
$db_name = 'admin_apibca';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn) {
    // echo 'Connected';
} else {
    // echo 'Not Connected';
}
