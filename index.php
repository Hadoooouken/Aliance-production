<?php $page_class = 'main-page' ?>

<?php include_once('./head.php') ?>
<?php include_once('./body.php') ?>
<header class="header header__image">
    <?php include_once('./header-page.php') ?>
    <div class="container">
        <div class="header__content">
            <div class="separator"></div>
            <h1 class="header__title">
                Комплексное обеспечение товарами и&nbsp;расходными материалами бизнеса
            </h1>
            <p class="header__text">Высокий уровень вовлечения представителей целевой аудитории является четким
                доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от
                анализа существующих паттернов поведения.</p>
            <a href="./" class="button header__button" data-js-header-modal-button>Подробнее о компании</a>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper header__features-list">
                <div class="swiper-slide header__features-item">
                    <svg class="header__features-svg" width="36" height="36">
                        <use href="./images/sprites.svg#1"></use>
                    </svg>
                    <p class="header__features-text">Непрерывная работа c 2017 года</p>
                </div>
                <div class="swiper-slide header__features-item">
                    <svg class="header__features-svg" width="36" height="36">
                        <use href="./images/sprites.svg#2"></use>
                    </svg>
                    <p class="header__features-text">Вся продукция сертифицирована</p>
                </div>
                <div class="swiper-slide header__features-item">
                    <svg class="header__features-svg" width="36" height="36">
                        <use href="./images/sprites.svg#3"></use>
                    </svg>
                    <p class="header__features-text">Контроль качества на всех этапах</p>
                </div>
                <div class="swiper-slide header__features-item">
                    <svg class="header__features-svg" width="36" height="36">
                        <use href="./images/sprites.svg#4"></use>
                    </svg>
                    <p class="header__features-text">Возможны поставки по всей России</p>
                </div>
                <div class="swiper-slide header__features-item">
                    <svg class="header__features-svg" width="36" height="36">
                        <use href="./images/sprites.svg#5"></use>
                    </svg>
                    <p class="header__features-text">Оперативное производство</p>
                </div>
            </div>
            <div class="slider__buttons">
                <div class="slider-button-prev">
                    <svg width="36" height="24">
                        <use href="./images/sprites.svg#arrow-prev"></use>
                    </svg>
                </div>
                <div class="slider-button-next">
                    <svg width="36" height="24">
                        <use href="./images/sprites.svg#arrow-next"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="section section--light">
        <div class="container">

            <div class="separator"></div>
            <h2 class="section__title">схема работы</h2>

            <div class="steps__list swiper__steps">
                <div class="swiper-wrapper">
                    <div class="steps__item swiper-slide">
                        <span class="steps__num">01</span>
                        <div class="steps__content">
                            <h3 class="steps__title">Знакомство</h3>
                            <p class="steps__text">Безусловно, сплочённость команды профессионалов позволяет
                                оценить
                                значение форм воздействия.</p>
                            <a href="./" class="button__link button__link--steps">Оставить заявку</a>
                        </div>
                    </div>
                    <div class="steps__item swiper-slide">
                        <span class="steps__num">02</span>
                        <div class="steps__content">
                            <h3 class="steps__title">Заключение<br>договора</h3>
                            <p class="steps__text">Лишь интерактивные прототипы призваны к ответу.</p>
                        </div>
                    </div>
                    <div class="steps__item swiper-slide">
                        <span class="steps__num">03</span>
                        <div class="steps__content">
                            <h3 class="steps__title">Производство</h3>
                            <p class="steps__text">А также стремящиеся вытеснить традиционное производство,
                                нанотехнологии
                                функционально разнесены на независимые элементы.</p>
                        </div>
                    </div>
                    <div class="steps__item swiper-slide">
                        <span class="steps__num">04</span>
                        <div class="steps__content">
                            <h3 class="steps__title">Доставка</h3>
                            <p class="steps__text">В частности, экономическая повестка сегодняшнего дня говорит
                                о
                                возможностях приоритизации разума над эмоциями.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-arrows slider__steps-wrapper">
                <button class="nav-arrows__button nav-arrows__button--sm nav-arrows__button--prev js-slider-steps-prev">
                    <svg class="arrow" width="30" height="20">
                        <use href="./images/sprites.svg#arrow-prev"></use>
                    </svg>
                </button>

                <button class="nav-arrows__button nav-arrows__button--sm nav-arrows__button--next js-slider-steps-next">
                    <svg class="arrow" width="30" height="20">
                        <use href="./images/sprites.svg#arrow-next"></use>
                    </svg>
                </button>
            </div>


        </div>
    </section>
    <?php $block_title = "Контрактное производство";
    include_once('./template-parts/production-block.php') ?>
    <?php $block_title = "собственные марки";
    include_once('./template-parts/trademarks-block.php') ?>
    <section class="section founder">
        <img src="./images/founder-bg.jpg" alt="founder__photo" class="founder__photo" loading="lazy">
        <div class="container">
            <div class="founder__content-wrapper">
                <div class="founder__content">
                    <div class="separator"></div>
                    <h2 class="section__title founder__title">Отношение к делу<br>и к клиентам</h2>
                    <p class="founder__text">
                        Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
                        показывает,
                        что укрепление и развитие внутренней структуры говорит о возможностях соответствующих
                        условий
                        активизации. Внезапно, независимые государства, которые представляют собой яркий пример
                        континентально-европейского типа политической культуры, будут подвергнуты целой серии
                        независимых исследований. С учётом сложившейся международной обстановки, синтетическое
                        тестирование выявляет срочную потребность системы массового участия.
                    </p>
                    <p class="founder__text">
                        А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
                        ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что
                        выбранный
                        нами инновационный путь в значительной степени обусловливает важность дальнейших направлений
                        развития.
                    </p>
                    <a href="#" class="button__link button__link--founder">Подробнее о компании</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section clients">
        <div class="container">
            <div class="separator"></div>
            <div class="clients__wrapper">
                <div class="clients__content">
                    <h2 class="section__title clients__title">Производим аэрозольную продукцию для разных сфер</h2>
                    <ul class="clients__list">
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#20"></use>
                            </svg>
                            <span class="clients__text">Химические производства</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#21"></use>
                            </svg>
                            <span class="clients__text">Автомойки</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#22"></use>
                            </svg>
                            <span class="clients__text">Пищевая продукция</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#23"></use>
                            </svg>
                            <span class="clients__text">Лаки и краски</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#24"></use>
                            </svg>
                            <span class="clients__text">Косметические средства</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#25"></use>
                            </svg>
                            <span class="clients__text">Автомобильная косметика</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#26"></use>
                            </svg>
                            <span class="clients__text">Косметика по уходу за одеждой</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#27"></use>
                            </svg>
                            <span class="clients__text">Косметика по уходу за обувью</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#28"></use>
                            </svg>
                            <span class="clients__text">Строительные материалы</span>
                        </li>
                        <li class="clients__item">
                            <svg class="clients__icon" width="30" height="30">
                                <use href="./images/sprites.svg#29"></use>
                            </svg>
                            <span class="clients__text">И многих других</span>
                        </li>
                    </ul>
                </div>
                <ul class="clients-logo__list">
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                    <li class="clients-logo__item">
                        <img class="clients-logo__image" src="./images/clients-icon-1.png" alt="" width="70"
                            height="70">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section blog">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section__title blog__title">Блог экспертов в области производства</h2>
            <div class="swiper swiper__blog">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide blog-card">
                        <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card__description">Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени предоставлены...</p>
                        <img src="./images/blog/1.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card__description">Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                        <img src="./images/blog/2.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card__description">Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                        <img src="./images/blog/1.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card__description">Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени предоставлены...</p>
                        <img src="./images/blog/2.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </div>
                <div class="blog-card__footer">
                    <a href="./" class="button__link button__link--blog">Весь блог</a>
                    <div class="nav-arrows slider__blog-wrapper">
                        <button
                            class="nav-arrows__button nav-arrows__button--lg nav-arrows__button--prev js-slider-blog-prev">
                            <svg class="nav-arrows__icon">
                                <use href="./images/sprites.svg#arrow-prev"></use>
                            </svg>
                        </button>

                        <button
                            class="nav-arrows__button nav-arrows__button--lg nav-arrows__button--next  js-slider-blog-next">
                            <svg class="nav-arrows__icon">
                                <use href="./images/sprites.svg#arrow-next"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('./cta.php') ?>
</main>
<?php include_once('./footer.php') ?>
<div class="modal modal__question">
    <div class="modal__dialog">
        <h2 class="modal__title">Есть вопросы?</h2>
        <button class="modal__close-button" type="button" data-js-header-close-modal-button>
            <svg width="18" height="18">
                <use href="./images/sprites.svg#closeButton"></use>
            </svg>
        </button>
        <p class="modal__text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <form action="./handler.php" method="POST" class="modal__form">
            <div class="input__group-wrapper input__group-wrapper--vertical">
                <div class="input__group input__group--modal">
                    <input type="text" class="input__group-input input__group-input--modal" id="user-name-modal"
                        name="username" placeholder=" " required>
                    <label class="input__group-label input__group-label--modal" for="user-name-modal">Имя</label>
                </div>
                <div class="input__group input__group--modal">
                    <input id="user-phone-modal" type="tel"
                        class="input__group-input input__group-input--modal phone-mask" name="userphone" placeholder=" "
                        required>
                    <label class="input__group-label input__group-label--modal" for="user-phone-modal">Номер
                        телефона</label>
                </div>
            </div>
            <div class="cta__form-footer cta__form-footer--vertical">
                <button type="submit" class="button button--cta button-modal">Отправить заявку</button>
                <div class="notify">
                    <svg class="notify__icon" width="14" height="14">
                        <use href="./images/sprites.svg#notify-icon"></use>
                    </svg>
                    <p class="cta__form-notify">
                        Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                        конфиденциальность информации!
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal modal--success">
    <div class="modal__dialog ">
        <img src="./images/modal-image/thanks_illu.png" alt="">
        <h2 class="modal__title ">Спасибо за заявку!</h2>
        <button class="modal__close-button" type="button" data-js-header-close-modal-button>
            <svg width="18" height="18">
                <use href="./images/sprites.svg#closeButton"></use>
            </svg>
        </button>
        <p class="modal__text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
            поможем даже в самых сложных случаях!</p>
        <a href="./index.php" class="button button--cta button-modal">Вернуться на главную</a>
    </div>
</div>

</body>

</html>