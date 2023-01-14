<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo.svg" type="image/x-icon">

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="bg_header">
            <div class="header_wraper">
                <div class="info_head">
                    <div class="logo_block">
                        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo.svg" alt="Logo">
                        <p class="logo_subtitle">фабрика декора</p>
                    </div>
                    <div class="phone_block">
                        <a class="phone_number" href="tel:+79267803663">+7 926 780 3663 
                            <span class="phone_subtitle">Обратный звонок</span>
                        </a>
                
                    </div>
                </div>
                <form action="#" class="seach_block">
                    <input type="text" id="search" placeholder="Поиск">
                </form>
                <div class="user_block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/heart.svg" alt="Heart">
                    <div class="cart_block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/cart.svg" alt="Cart">
                        <span class="price">15 354 руб.</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/user.svg" alt="User">
                </div>
            </div>
        </div>
        <div class="menu_bg">
            <menu>
                <a class="catalog">Каталог</a>
                <nav>
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
            </menu>
        </div>
    </header>