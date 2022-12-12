<?php

require_once 'connect.php';
$sql = "SELECT * FROM question";
$check_question = $connect->query($sql);

while($temp = $check_question->fetch(PDO::FETCH_ASSOC)){
    $questions[] = $temp;
}

