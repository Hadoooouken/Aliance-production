<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <svg class="logo__svg--dark logo__svg-footer" width="200" height="63">
                <use href="./images/sprites.svg#logo-dark"></use>
            </svg>
            <?php include('./template-parts/contacts-block.php') ?>
        </div>
    </div>
    <hr class="divider-line divider-line--footer">
    <div class="container">
        <div class="footer__bottom">
            <div class="footer__menu-wrapper">
                <h2 class="footer__menu-title">Контрактное производство</h2>
                <ul class="footer__menu-list footer__menu--2cols">
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Автомобильная химия</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Бытовая химия</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Дезинфицирующие средства</a>
                    </li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Пищевые аэрозоли</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Косметическая продукция</a>
                    </li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Краски аэрозольные</a></li>
                </ul>
            </div>
            <div class="footer__menu-wrapper">
                <h2 class="footer__menu-title">Собственные марки</h2>
                <ul class="footer__menu-list footer__menu-list--1col">
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Автохимия AG-Tech</a></li>
                    <li class="footer__menu-item"><a href="#" class="footer__menu-link">Автохимия AP</a></li>
                </ul>
            </div>
            <div class="footer__menu-wrapper">
                <ul class="footer__menu-list footer__menu-list--bold footer__menu-list--1col">
                    <li class="footer__menu-item"><a href="./about.html"
                            class=" footer__menu-link footer__menu-link--bold">О
                            компании</a></li>
                    <li class="footer__menu-item"><a href="#"
                            class="footer__menu-link footer__menu-link--bold">Новости</a></li>
                    <li class="footer__menu-item"><a href="#"
                            class="footer__menu-link footer__menu-link--bold">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="divider-line divider-line--footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__legal">
                <p class="footer__copyright">&#169;
                    <?php echo date('d.m.Y') ?> «Aliance Production». Все права защищены.
                </p>
                <a href="#" class="footer__policy">Политики конфиденциальности</a>
            </div>
            <div class="footer__author">
                <span class="footer__made-in">Сделано в
                </span>
                <svg width="52" height="11">
                    <use href="./images/sprites.svg#ruso"></use>
                </svg>
            </div>
        </div>
    </div>
</footer>