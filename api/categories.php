<?php
header('Content-Type: application/json');

$response = array("options"=>array("Eins", "Zwei", "Drei", "Vier"));
print_r(json_encode($response));
