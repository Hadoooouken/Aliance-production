<?php $page_class = 'main-page'; ?>
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
        <?php $slider_variant = 'features-slider--inner';
        include_once('./template-parts/features-swiper-block.php') ?>
    </div>
</header>
<main>
    <section class="section section--light">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section__title">схема работы</h2>
            <?php include_once('./template-parts/steps-swiper-block.php') ?>
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
            <?php
            include_once('./template-parts/blog-swiper-block.php'); ?>
        </div>
    </section>
    <?php include_once('./cta.php') ?>
</main>
<?php include_once('./footer.php') ?>
<?php include_once('./template-parts/modals.php') ?>
</body>

</html>