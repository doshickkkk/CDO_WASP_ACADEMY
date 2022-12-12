<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="icon" href="IMG/FAVICON.ico" type="image/x-icon">
    <title>Авторизация</title>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<!-- Форма авторизации -->
<div class="aut">
    <form action="vendor/signin.php" method="post" class="reg_form_0">

        <input type="text" name="login" placeholder="Введите свой логин" class="reg_input">

        <input type="password" name="password" placeholder="Введите пароль" class="reg_input">
        <button type="submit">Войти</button>
        <p class="hint">
            У вас нет аккаунта? - <a href="/register.php"><span class="autorisation">зарегистрируйтесь</span></a>!
        </p>
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