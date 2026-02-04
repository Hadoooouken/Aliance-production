<?php include_once('./template-parts/mobile-overlay-block.php') ?>
<nav class="header__navbar">
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
        <li class="header__navigation-item"><a href="./about.php" class="header__navigation-link">О&nbsp;компании</a>
        </li>
        <li class="header__navigation-item"><a href="./contracts.php" class="header__navigation-link">Контрактное
                производство</a></li>
        <li class="header__navigation-item"><a href="./trademarks.php" class="header__navigation-link">Собственные
                торговые
                марки</a></li>
        <li class="header__navigation-item"><a href="#" class="header__navigation-link">Новости</a></li>
        <li class="header__navigation-item"><a href="./contacts.php" class="header__navigation-link">Контакты</a>
        </li>
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