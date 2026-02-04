<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fonts/fonts.css">
    <link rel="stylesheet" href="./styles/swiper-bundle.min.css">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/index.css">
    <title> <?= $page_title ?>- Aliance Production</title>
</head>

<body class="<?= $page_class ?>">
    <div class="mobile__overlay" data-js-header-overlay>
        <nav class="mobile__menu" aria-label="Мобильное меню">
            <div class="mobile__menu-inner">
                <ul class="mobile__menu-list">
                    <li class="mobile__menu-item"><a href="./about.php" class="mobile__menu-link">О компании</a></li>
                    <li class="mobile__menu-item"><a href="./contracts.php" class="mobile__menu-link">Контрактное
                            производство</a>
                        <ul class="mobile__submenu-list">
                            <li class="mobile__submenu-item"><a href="#" class="mobile__submenu-link">Автомобильная
                                    химия</a>
                            </li>
                            <li class="mobile__submenu-item"><a href="#" class="mobile__submenu-link">Бытовая химия</a>
                            </li>
                            <li class="mobile__submenu-item"><a href="#"
                                    class="mobile__submenu-link">Дезинфицирующие&nbsp;средства</a>
                            </li>
                            <li class="mobile__submenu-item"><a href="#" class="mobile__submenu-link">Пищевые
                                    аэрозоли</a>
                            </li>
                            <li class="mobile__submenu-item"><a href="#" class="mobile__submenu-link">Косметическая
                                    продукция</a>
                            </li>
                            <li class="mobile__submenu-item"><a href="#" class="mobile__submenu-link">Краски
                                    аэрозольные</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile__menu-item"><a href="./trademarks.php" class="mobile__menu-link">Собственные
                            марки</a>
                        <ul class="mobile__submenu-list">
                            <li class="mobile__submenu-item"><a href="#" class="mobile__submenu-link">Автохимия
                                    AG-Tech</a>
                            </li>
                            <li class="mobile__submenu-item"><a href="#" class="mobile__submenu-link">Автохимия AP</a>
                            </li>

                        </ul>
                    </li>
                    <li class="mobile__menu-item"><a href="#" class="mobile__menu-link">Новости</a></li>
                    <li class="mobile__menu-item"><a href="#" class="mobile__menu-link">Контакты</a></li>
                </ul>
            </div>
            <hr class="divider-line divider-line--mobile">
            <footer class="mobile__menu-footer">
                <div class="contacts contacts--mobile">
                    <a class="contacts__phone" href="tel:+74996861014">+7 (499) 686-10-14</a>
                    <address class="contacts__list">
                        <a class="contacts__item" href="#">
                            <img class="contacts__icon" src="./images/icon-mobile/navigation-licon.svg" alt="">
                            <span class="contacts__text">г. Москва, Холодильный пер. 4к1с8</span>
                        </a>

                        <a class="contacts__item" href="mailto:a.dragunov@tdaliance.ru">
                            <img class="contacts__icon" src="./images/icon-mobile/mail-icon.svg" alt="">
                            <span class="contacts__text">a.dragunov@tdaliance.ru</span>
                        </a>
                    </address>

                    <div class="socials socials--mobile">
                        <a href="#"><img src="./images/icon-mobile/vk-icon.svg" alt="ВКонтакте"></a>
                        <a href="#"><img src="./images/icon-mobile/instagramm-icon.svg" alt="Instagram"></a>
                    </div>
                </div>
            </footer>
        </nav>
    </div>
    <nav class="header__navbar header__navbar--light">
        <button class="header__burger-button burger-button" type="button" aria-label="Open menu" title="Open menu"
            data-js-header-burger-button>
            <span class="burger-button__wrapper">
                <span class="burger-button__line"></span>
                <span class="burger-button__line"></span>
                <span class="burger-button__line"></span>
            </span>
        </button>
        <a href="./" class="header__logo">
            <svg class="logo__svg logo__svg--light" width="140" height="44">
                <use href="./images/sprites.svg#logo-light"></use>
            </svg>
            <svg class="logo__svg logo__svg--dark" width="140" height="44">
                <use href="./images/sprites.svg#logo-dark"></use>
            </svg>
        </a>
        <ul class="header__navigation-list">
            <li class="header__navigation-item"><a href="./about.php"
                    class="header__navigation-link">О&nbsp;компании</a></li>
            <li class="header__navigation-item"><a href="./contracts.php" class="header__navigation-link">Контрактное
                    производство</a></li>
            <li class="header__navigation-item"><a href="./trademarks.php" class="header__navigation-link">Собственные
                    торговые
                    марки</a></li>
            <li class="header__navigation-item"><a href="#" class="header__navigation-link">Новости</a></li>
            <li class="header__navigation-item"><a href="#" class="header__navigation-link">Контакты</a></li>
        </ul>

        <div class="header__contacts">
            <svg class="header__contacts-icon" width="24" height="24">
                <use href="./images/sprites.svg#phone-icon"></use>
            </svg>
            <a class="header__contacts-link" href="tel:+74996861014">+7 (499) 686-10-14</a>
        </div>
        <button class="header__nav-button button" data-toggle="modal">
            <svg class="header__contacts-icon" width="24" height="24">
                <use href="./images/sprites.svg#phone-icon"></use>
            </svg>
            <span class="header__nav-button-text">Получить консультацию</span></button>
    </nav>