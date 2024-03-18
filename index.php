<?php
session_start();
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

        .carousel {
            width: 60%; /* Уменьшаем ширину карусели */
            overflow: hidden;
            position: relative;
            border-radius: 10px;
            margin: 0 auto; /* Центрируем карусель по горизонтали */
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-item {
            flex: 0 0 100%;
            max-width: 100%;
            height: 500px; /* Уменьшаем высоту изображений */
        }

        img {
            width: 100%;
            height: auto;
        }
        .services {
    margin-top: 20px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.service {
    width: 30%;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 20px;
}

.service img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.service h3 {
    margin-top: 10px;
}

.service p {
    margin-top: 5px;
}

.service button {
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #f0aa13;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
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
        <div class="container">
            <h1>Добро пожаловать на главную страницу FIT SERVICE</h1>
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="1.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="2.jpg" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="3.jpg" alt="Image 3">
                    </div>
                    <!-- Добавьте больше изображений, если нужно -->
                </div>
            </div>
            <div class="services">
    <div class="service">
        <img src="4.jpg" alt="Замена масла и фильтра" style="width: 300px; height: 200px; border-radius: 5px; margin-bottom: 10px;">
        <h3>Замена масла и фильтра</h3>
        <p>Регулярная замена масла и масляного фильтра помогает поддерживать работоспособность двигателя и продлевает срок его службы. Эта услуга включает в себя замену масла и фильтра, а также диагностику основных параметров работы двигателя.</p>
        <p>Цена: $50</p>
        <button onclick="orderService(1)">Заказать</button>
    </div>
    <div class="service">
        <img src="5.jpg" alt="Ремонт тормозной системы" style="width: 300px; height: 200px; border-radius: 5px; margin-bottom: 10px;">
        <h3>Ремонт тормозной системы</h3>
        <p>Предотвратите аварии и обеспечьте безопасное управление вашим автомобилем с помощью регулярного обслуживания тормозной системы. Эта услуга включает в себя диагностику, ремонт и замену тормозных деталей по необходимости.</p>
        <p>Цена: $150</p>
        <button onclick="orderService(2)">Заказать</button>
    </div>
    <div class="service">
        <img src="6.jpg" alt="Замена передних амортизаторов" style="width: 300px; height: 200px; border-radius: 5px; margin-bottom: 10px;">
        <h3>Замена передних амортизаторов</h3>
        <p>Обеспечьте комфорт и безопасность во время движения вашего автомобиля с помощью замены передних амортизаторов. Эта услуга включает в себя демонтаж старых амортизаторов и установку новых.</p>
        <p>Цена: $300</p>
        <button onclick="orderService(3)">Заказать</button>
    </div>
    <!-- Добавьте другие услуги, если необходимо -->
</div>

            <?php if (!isset($_SESSION['userId'])): ?>
                <p>Чтобы увидеть дополнительные разделы сайта, пожалуйста, <a href="login.php">войдите</a> или <a href="register.php">зарегистрируйтесь</a>.</p>
            <?php endif; ?>
        </div>
    </div>

    <script>
        const carouselItems = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        setInterval(() => {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            const offset = currentIndex * -100;
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
        }, 2000); // Измените время смены изображений, если нужно
    </script>

</body>
</html>
