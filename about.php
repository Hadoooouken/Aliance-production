<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fonts/fonts.css">
    <link rel="stylesheet" href="./styles/swiper-bundle.min.css">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/index.css">
    <title>О компании - Aliance Production</title>
</head>

<body>

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
            <li class="header__navigation-item"><a href="#" class="header__navigation-link">О&nbsp;компании</a></li>
            <li class="header__navigation-item"><a href="#" class="header__navigation-link">Контрактное
                    производство</a></li>
            <li class="header__navigation-item"><a href="#" class="header__navigation-link">Собственные торговые
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

    <main class="about-page">
        <section class="section section--full">
            <div class="hero hero--gray section--spaced">
                <div class="container">
                    <div class="separator"></div>
                    <h1 class="section__title hero__title">О компании</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Главная</a></li>
                        <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">О компании</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <?php include_once('./cta.php') ?>
    </main>
    <?php include_once('./footer.php') ?>
    <script src="./src/swiper-bundle.min.js" defer></script>
    <script src="./src/index.js" defer></script>
</body>


<!-- <section class="section section--full">
            <div class="hero hero--gray section--spaced hero--small">
                <div class="container">
                    <div class="hero__wrapper">
                        <div class="hero__content">
                            <div class="separator"></div>
                            <h1 class="section__title hero__title">Автомобильная химия</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Главная</a></li>
                                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Контрактное
                                        производство</a></li>
                                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Автомобильная
                                        химия</a></li>
                            </ul>
                        </div>
                        <img class="hero__image" src="./images/hero/hero-avto-him.png" alt="" width="480" height="240"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--full">
            <div class="hero section--spaced hero--image">
                <div class="container">
                    <div class="separator"></div>
                    <h1 class="section__title hero__title hero__title--light">Современная методология разработки
                        одухотворила всех причастных</h1>
                    <ul class="breadcrumb breadcrumb--light">
                        <li class="breadcrumb__item--light"><a class="breadcrumb__link" href="#">Главная</a></li>
                        <li class="breadcrumb__item--light"><a class="breadcrumb__link" href="#">Блог</a></li>
                        <li class="breadcrumb__item--light"><a class="breadcrumb__link" href="#">Современная методология
                                разработки одухотворила всех причастных</a></li>
                    </ul>
                </div>
            </div>
        </section> -->