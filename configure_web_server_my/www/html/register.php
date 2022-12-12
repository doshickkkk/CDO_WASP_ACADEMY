<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }

    include './vendor/grade.php';
    include './vendor/group.php';


?>

<!doctype html>
<html lang="en">
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="icon" href="IMG/FAVICON.ico" type="image/x-icon">
    <title>Регистрация</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Форма регистрации -->
    <div class="reg">
        <form action="vendor/signup.php" method="post" enctype="multipart/form-data" class="reg_form_0">
            
            <div class="reg_form">
                <input type="text" name="surname" placeholder="Введите Вашу фамилию" required class="reg_input">
                
                <input type="text" name="name" placeholder="Введите Ваше Имя" required class="reg_input">

                <input type="text" name="middle_name" placeholder="Введите Ваше Отчество" required class="reg_input">

                <input type="text" name="study_place" placeholder="Введите Ваше место обучения" required class="reg_input">

        
                <select id="selectID" name="grade_id" required >

                    <option value=1>10 класс</option>
                    <option value=2>11 класс</option>
                    <option value=3>1 курс</option>
                    <option value=4>2 курс</option>
                    
                </select>


                <input type="text" name="education_direction" placeholder="Введите Ваше направление" required class="reg_input">

            
                <select id="selectID" name="course_id" required >

                    <option value=1>Разработка мобильных приложений на языке C#</option>
                    <option value=2>Программирование на языке Python</option>

                </select>


                <input type="text" name="telegram_id" placeholder="Telegram ID" required class="reg_input">

                <input type="email" name="e_mail" placeholder="Введите адрес своей почты" required class="reg_input">

                <input type="text" name="login" placeholder="Введите свой логин" required class="reg_input">

                <input type="password" name="password" placeholder="Введите пароль" required class="reg_input">

                <input type="password" name="password_confirm" placeholder="Подтвердите пароль" required class="reg_input">
            </div>
            <div class="no_input">
                <button type="submit">Зарегистрироваться</button>
                <p class="hint"> У вас уже есть аккаунт? - <a href="/"><span class="autorisation">авторизируйтесь</span></a>!</p>
            </div>
            
            <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
    

</body>
</html>