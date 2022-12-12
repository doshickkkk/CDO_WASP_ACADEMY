<?php

require_once 'connect.php';
$sql = "SELECT * FROM students";
$check_students = $connect->query($sql);

while($temp = $check_students->fetch(PDO::FETCH_ASSOC)){
    $students[] = $temp;
}

