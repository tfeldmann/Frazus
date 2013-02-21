<?php

include_once("../model.php");

$model = new Model();
$response = array("options"=>$model->list_categories());

header('Content-Type: application/json');
print_r(json_encode($response));
