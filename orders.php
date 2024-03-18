<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
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
            <h2 style="font-size: 24px; color: #333; text-align: center; margin-bottom: 20px;">Заказы</h2>
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <div style="width: 70%;">
                    <div style="border: 1px solid #f0aa13; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                        <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">Заказ #4</h3>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Товар:</strong> Замена масла и фильтра</p>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Срок выполнения:</strong> 1 день</p>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Цена:</strong> $50</p>
                        <p style="font-size: 16px; color: #555;"><strong>Скидка:</strong> 10%</p>
                    </div>
                    <div style="border: 1px solid #f0aa13; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                        <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">Заказ #5</h3>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Товар:</strong> Ремонт тормозной системы</p>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Срок выполнения:</strong> 2 дня</p>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Цена:</strong> $150</p>
                        <p style="font-size: 16px; color: #555;"><strong>Скидка:</strong> 5%</p>
                    </div>
                    <div style="border: 1px solid #f0aa13; padding: 15px; border-radius: 5px;">
                        <h3 style="font-size: 20px; color: #333; margin-bottom: 10px;">Заказ #6</h3>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Товар:</strong> Замена передних амортизаторов</p>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Срок выполнения:</strong> 3 дня</p>
                        <p style="font-size: 16px; color: #555; margin-bottom: 5px;"><strong>Цена:</strong> $300</p>
                        <p style="font-size: 16px; color: #555;"><strong>Скидка:</strong> 15%</p>
                    </div>
                </div>
                <div style="width: 30%; margin-left: 20px;">
                    <img src="4.jpg" alt="Замена масла и фильтра" style="width: 80%; border-radius: 5px; margin-bottom: 40px;">
                    <img src="5.jpg" alt="Ремонт тормозной системы" style="width: 100%; border-radius: 5px; margin-bottom: 40px;">
                    <img src="6.jpg" alt="Замена передних амортизаторов" style="width: 100%; border-radius: 5px;">
                </div>
            </div>
        </div>

        <?php if (!isset($_SESSION['userId'])): ?>
            <p style="margin-top: 20px; font-size: 16px; line-height: 1.6; color: #555;">Чтобы увидеть дополнительные разделы сайта, пожалуйста, <a href="login.php" style="color: #3498db; text-decoration: underline;">войдите</a> или <a href="register.php" style="color: #3498db; text-decoration: underline;">зарегистрируйтесь</a>.</p>
        <?php endif; ?>
    </div>
</div>


</body>
</html>
