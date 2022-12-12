<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /');
    }

    if (!isset($_SESSION['points'])) {
        header('Location: /question_info.php');
    }

    include './vendor/students.php';
    include './vendor/courses.php';
    include './vendor/questions.php';

    $question_id = $_GET['id'];
    $_SESSION['current_question'] = $question_id;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="icon" href="IMG/FAVICON.ico" type="image/x-icon">
    <title>CDO WASP Academy</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu">
        <p class="logo_text"><img src="IMG/LOGO.png" class="logo"/>WASP Academy</p>
        
        <div class="menu_block">
            <div class="menu_item">
                <a href="tests.php"><p class="logo_text"><img src="IMG/category.svg" class="category_icon"/>Тесты</p></a>
            </div>
        </div>
        
        <div class="profile">
            <div>
                <span class="avatar">
                    <?php mb_internal_encoding("UTF-8");
                    $name = $_SESSION['user']['name'];
                    $first_letter = mb_substr($name, 0, 1);
                    echo $first_letter
                    ?>
                </span>
            </div>
            <div>
                <p class="profile_text"><?= $_SESSION['user']['name']?></p>
                <p class="profile_text"><?= $_SESSION['user']['surname']?></p>
            </div>
            <a href="vendor/logout.php" class="logout"><img src="IMG/logout.svg" class="logout_img"></a>
        </div>

    </div>

    <div class="content_bg_question">
        <div class="question_block_1">
            <p class="mainquestion_text"><?= $_SESSION['chapter']['name']?></p>

            <form action="vendor/checkquestion.php" method="post" class="voprosik">
                <!-- <p class="question_text">Вопрос 1</p> -->

                <p class="question"><?= $questions[$question_id - 1]['question_text']?></p>

                <div class="checkbox-wrapper">
                    <label>
                        <?= $questions[$question_id - 1]['answer_1']?>
                        <input type="radio" class="modern-radio" value="1" name="a" required>
                        <span></span>
                    </label>
                    <label>
                        <?= $questions[$question_id - 1]['answer_2']?>
                        <input type="radio" class="modern-radio" value="2" name="a" required>
                        <span></span>
                    </label>
                    <label>
                        <?= $questions[$question_id - 1]['answer_3']?>
                        <input type="radio" class="modern-radio" value="3" name="a" required>
                        <span></span>
                    </label>
                    <label>
                        <?= $questions[$question_id - 1]['answer_4']?>
                        <input type="radio" class="modern-radio" value="4" name="a" required>
                        <span></span>
                    </label>

                    <button type="submit" class="next">Далeе</button>
                </div>

            </form>
        </div>
    </div>
</body>