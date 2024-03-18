<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
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
<div class="container" style="max-width: 1000px; margin: 0 auto;">
        <div style="border: 2px solid #f0aa13; padding: 20px; border-radius: 10px;">
            <h2 style="font-size: 24px; color: #333; text-align: center; margin-bottom: 20px;">О нас</h2>
            <p style="font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 15px;">Добро пожаловать в FIT SERVICE - ваш надежный партнер в области автомобильного обслуживания и ремонта! Мы гордимся предоставлением первоклассных услуг для поддержания вашего автомобиля в отличном состоянии.</p>
            <p style="font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 15px;">Наша миссия - предоставлять беспрецедентные автомобильные решения, придерживаясь принципов устойчивого развития и ответственности за окружающую среду. От регулярного обслуживания до инновационных ремонтных работ, мы стремимся сохранить как ваш автомобиль, так и нашу планету в оптимальном состоянии.</p>
            <img src="1.jpg" alt="О нас 1" style="width: 30%; margin-top: 20px;">
            <p style="font-size: 16px; line-height: 1.6; color: #555; margin-top: 20px;">Присоединяйтесь к нам в нашем stremlenii сделать мир лучше, один сервис за раз!</p>
            <img src="2.jpg" alt="О нас 2" style="width: 30%; margin-top: 20px;">
        </div>
        <?php if (!isset($_SESSION['userId'])): ?>
            <p style="margin-top: 20px; font-size: 16px; line-height: 1.6; color: #555;">Чтобы получить доступ к дополнительным разделам сайта, пожалуйста, <a href="login.php" style="color: #3498db; text-decoration: underline;">войдите</a> или <a href="register.php" style="color: #3498db; text-decoration: underline;">зарегистрируйтесь</a>.</p>
        <?php endif; ?>
    </div>
</div>




</body>
</html>
