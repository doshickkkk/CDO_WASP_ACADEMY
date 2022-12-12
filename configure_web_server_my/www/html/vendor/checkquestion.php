<?php 
    session_start();

    require_once './questions.php';
    
    $current_answer = $_POST['a'];
    $current_question = $_SESSION['current_question'];

    if ($current_answer == $questions[$current_question - 1]['right_answer']){
        ++ $_SESSION['points'];
    }

    if ($current_question == 12) {
        header('Location: ../test_result.php');
    }
    else
    {
        header('Location: ../question.php?id=' .$current_question + 1);
    }
    
    // print_r($current_answer);

?>