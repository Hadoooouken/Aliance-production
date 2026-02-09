<?php
$page_title = "О компании";
$header_style = "hero--gray";
$breadcrumb_color = "breadcrumb__item";
$page_class = 'page-inner';
include_once('./head.php');
include_once('./body.php');
include_once('./header-page.php') ?>
<main class="main--inner">
    <?php include_once('./page-hero.php') ?>
    <section class="section experts">
        <div class="container">
            <div class="experts__wrapper">
                <img class="experts__image" src="./images/about-page-image/experts.jpg" alt="" width="480" height="480">
                <div class="experts__content">
                    <div class="separator"></div>
                    <h2 class="section__title experts__title">мы - эксперты в области <br>производства химии</h2>
                    <p class="experts__text">
                        Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует
                        необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности
                        структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы,
                        которые представляют собой яркий пример континентально-европейского типа политической культуры,
                        будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что
                        перспективное планирование играет важную роль в формировании системы массового участия.
                    </p>
                </div>
            </div>
            <?php $slider_variant = 'features-slider--inner';
            include_once('./template-parts/info-swiper-block.php') ?>
        </div>
    </section>
    <section class="section production">
        <div class="container">
            <div class="production__wrapper">
                <div class="production__content">
                    <div class="separator"></div>
                    <h2 class="section__title production__title">Наше производство</h2>
                    <p class="production__text">
                        Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление
                        обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений.
                        Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда
                        внеочередных мероприятий с учётом комплекса кластеризации усилий.
                    </p>
                    <p class="production__text">
                        Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно
                        открывает новые горизонты для соответствующих условий активизации. Предварительные выводы
                        неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих
                        паттернов поведения.
                    </p>
                    <ul class="production__list">
                        <li class="production__item">
                            <svg width="30" height="30">
                                <use href="./images/sprites.svg#21"></use>
                            </svg>
                            <span class="production__item-text">Автомобильная химия</span>
                        </li>
                        <li class="production__item">
                            <svg width="30" height="30">
                                <use href="./images/sprites.svg#32"></use>
                            </svg>
                            <span class="production__item-text">Бытовая химия</span>
                        </li>
                        <li class="production__item">
                            <svg width="30" height="30">
                                <use href="./images/sprites.svg#31"></use>
                            </svg>
                            <span class="production__item-text">Дезинфицирующие средства</span>
                        </li>
                        <li class="production__item">
                            <svg width="30" height="30">
                                <use href="./images/sprites.svg#30"></use>
                            </svg>
                            <span class="production__item-text">Пищевые аэрозоли</span>
                        </li>
                        <li class="production__item">
                            <svg width="30" height="30">
                                <use href="./images/sprites.svg#24"></use>
                            </svg>
                            <span class="production__item-text">Косметическая продукция</span>
                        </li>
                        <li class="production__item">
                            <svg class="" width="30" height="30">
                                <use href="./images/sprites.svg#23"></use>
                            </svg>
                            <span class="production__item-text">Краски аэрозольные</span>
                        </li>
                    </ul>
                </div>
                <img class="production__image" src="./images/about-page-image/developing.png" alt="" width="600"
                    height="750">
            </div>
        </div>
    </section>
    <?php include_once('./template-parts/founder-block.php') ?>
    <section class="section research">
        <div class="container">
            <div class="research__wrapper">
                <div class="separator"></div>
                <h2 class="section__title research__title">Исследовательский центр Aliance production</h2>
                <div class="research__content">
                    <p class="research__text">Явные признаки победы институционализации рассмотрены исключительно в
                        разрезе
                        маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся
                        страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые
                        государства набирают популярность среди определенных слоев населения, а значит, должны быть
                        указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть
                        призваны к ответу.</p>
                    <p class="research__text">С учётом сложившейся международной обстановки, синтетическое тестирование
                        требует
                        определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать,
                        что высокотехнологичная концепция общественного уклада представляет собой интересный
                        эксперимент&nbsp;проверки как самодостаточных, так и внешне зависимых концептуальных решений.
                        Предварительные
                        выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно
                        фиксирует необходимость стандартных подходов.</p>

                </div>
            </div>
        </div>
        <?php $slider_variant = 'blog-slider--fullwidth';
        include_once('./template-parts/blog-swiper-block.php'); ?>
    </section>
    <?php include_once('./template-parts/clients-block.php') ?>
    <?php include_once('./cta.php') ?>
</main>
<?php include_once('./footer.php') ?>
<?php include_once('./template-parts/modals.php') ?>
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