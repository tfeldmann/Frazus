<?php

require_once("../model.php");

$category = $_POST['category'];
$question = $_POST['question'];
$answer = $_POST['answer'];

$model = new Model;
$s = $model->add_question($category, $question, $answer);

if ($s)
{
    $response = array("done"=>true, "message"=>"");
}
else
{
    $response = array("done"=>false, "message"=>"Es ist ein Fehler aufgetreten.$category-$question-$answer");
}

print_r(json_encode($response));
