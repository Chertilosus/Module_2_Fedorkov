<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fcedb6;
        }
        header {
            background-color: #f0aa13;
            padding: 20px 0;
            color: white;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        nav {
            margin-top: 20px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <h1>FIT SERVICE</h1>
        <nav>
            <?php if (!isset($_SESSION['userId'])): ?>
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="contacts.php">Контакты</a>
                <a href="login.php">Вход</a>
                <a href="register.php">Регистрация</a>
            <?php elseif ($_SESSION['userRole'] === 'admin'): ?>
                <a href="index.php">Главная</a>
                <a href="admin_panel.php">Админ панель</a>
                <a href="logout.php">Выход</a>
            <?php else: ?>
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="contacts.php">Контакты</a>
                <a href="orders.php">Заказы</a>
                <a href="profile.php">Профиль</a>
                <a href="logout.php">Выход</a>
            <?php endif; ?>
        </nav>
    </div>
</header>

<div class="content">
    <div class="container" style="max-width: 400px; margin: 0 auto;">
        <div style="border: 2px solid #f0aa13; padding: 20px; border-radius: 10px;">
            <h2 style="font-size: 24px; color: #333; text-align: center; margin-bottom: 20px;">Контакты</h2>
            <p style="font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 15px;">Для связи с нами, пожалуйста, воспользуйтесь следующей формой:</p>
            <form action="#" method="post" style="margin-bottom: 20px;">
                <label for="name" style="font-size: 16px; color: #333; display: block;">Ваше имя:</label>
                <input type="text" id="name" name="name" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #f0aa13; border-radius: 5px; box-sizing: border-box;">
                <label for="email" style="font-size: 16px; color: #333; display: block;">Ваш Email:</label>
                <input type="email" id="email" name="email" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #f0aa13; border-radius: 5px; box-sizing: border-box;">
                <label for="message" style="font-size: 16px; color: #333; display: block;">Ваше сообщение:</label>
                <textarea id="message" name="message" rows="4" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #f0aa13; border-radius: 5px; box-sizing: border-box;"></textarea>
                <button type="submit" style="width: 100%; padding: 10px; background-color: #f0aa13; color: white; border: none; border-radius: 5px; cursor: pointer; box-sizing: border-box;">Отправить</button>
            </form>
            <p style="font-size: 16px; line-height: 1.6; color: #555;">Вы также можете связаться с нами по телефону: +7 (961) 162-20-22</p>
        </div>
        <?php if (!isset($_SESSION['userId'])): ?>
            <p style="margin-top: 20px; font-size: 16px; line-height: 1.6; color: #555;">Чтобы увидеть дополнительные разделы сайта, пожалуйста, <a href="login.php" style="color: #3498db; text-decoration: underline;">войдите</a> или <a href="register.php" style="color: #3498db; text-decoration: underline;">зарегистрируйтесь</a>.</p>
        <?php endif; ?>
    </div>
</div>

</body>
<script>
    function validateForm() {
        var name = document.getElementById("name").value.trim();
        var email = document.getElementById("email").value.trim();
        var message = document.getElementById("message").value.trim();

        if (name === "" || email === "" || message === "") {
            alert("Пожалуйста, заполните все поля формы.");
            return false;
        }

        // Проверка на валидный email
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Пожалуйста, введите корректный email адрес.");
            return false;
        }

        return true;
    }
</script>

</html>
