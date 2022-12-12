<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE login = ? AND password = ?";
    $check_user = $connect->prepare($sql);
    $check_user->execute([$login, $password]);
    if ($check_user->rowCount() > 0) {

        $user = $check_user->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user'] = [
            "id" => $user['student_id'],
            "login" => $user['login'],
            "name" => $user['name'],
            "e_mail" => $user['e_mail'],
            "surname" => $user['surname'],
            "middle_name" => $user['middle_name'],
            "telegram_id" => $user['telegram_id'],
            "course_id" => $user['course_id'],
            "test_points" => 0
        ];
        
        $sql = "SELECT * FROM course WHERE course_id = ?" ;
        $query = $connect->prepare($sql);
        $query->execute([$_SESSION['user']['course_id']]);
        $course = $query->fetch(PDO::FETCH_ASSOC);

        $_SESSION['course'] = [
            "name" => $course['course_name'],
            "image" => $course['image']
        ];
        
        $sql = "SELECT * FROM chapters WHERE course_id = ?" ;
        $query = $connect->prepare($sql);
        $query->execute([$_SESSION['user']['course_id']]);
        $chapters = $query->fetch(PDO::FETCH_ASSOC);

        $_SESSION['chapters'] = [$chapters];
        
        header('Location: ../profile.php');
        
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
