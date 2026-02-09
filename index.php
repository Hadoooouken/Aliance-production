<?php $page_class = 'main-page';
?>


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
    include_once('./template-parts/trademarks-block.php'); ?>
    <?php
    include_once('./template-parts/founder-block.php'); ?>
    <?php
    include_once('./template-parts/clients-block.php'); ?>
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
<?php include_once('./template-parts/modals.php') ?>

</body>

</html>