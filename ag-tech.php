<?php
$page_title = "Автохимия AG-Tech";
$header_style = "hero--gray";
$breadcrumb_color = "breadcrumb__item";
$page_class = 'page-inner';
include_once('./template-parts/head.php');
include_once('./template-parts/body.php');
include_once('./template-parts/header-page.php') ?>
<main class="main--inner">
    <?php include_once('./template-parts/page-hero-image.php') ?>
    <section class="section autohim-contract autohim-contract--distributor">
        <div class="container">
            <div class="autohim-contract__wrapper">
                <img class="autohim-contract__image" src="./images/ag-tech/1.jpg" alt="" width="600" height="750">
                <div class="autohim-contract__content">
                    <div class="separator"></div>
                    <h2 class="section__title autohim-contract__title">Собственное производство автохимия AG-Tech</h2>
                    <p class="autohim-contract__text">
                        Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует
                        необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных
                        резервов неоднозначны и будут описаны максимально подробно.
                    </p>
                    <p class="autohim-contract__text">
                        Но социально-экономическое развитие напрямую зависит от поставленных обществом задач!
                        Безусловно,
                        постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для
                        системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами
                        инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании
                        своевременного
                        выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно
                        положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким
                        доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт
                        предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они
                        забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на
                        привычные
                        вещи - безусловно открывает новые горизонты для поставленных обществом задач.
                    </p>
                </div>
            </div>
            <?php $slider_variant = 'features-slider--inner';
            include_once('./template-parts/features-swiper-block.php') ?>
        </div>
    </section>
    <section class="section distributor hero--gray">
        <div class="container">
            <div class="distributor__content">
                <div class="separator"></div>
                <h2 class="section__title distributor__title">Генеральный дистрибьютор премиальной
                    автохимии</h2>
                <p class="distributor__text">
                    Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими
                    общечеловеческие нормы этики и морали.
                </p>
                <ul class="distributor__list">

                    <li class="distributor__item">
                        <svg class="distributor__icon" width="24" height="24">
                            <use href="./images/sprites.svg#20"></use>
                        </svg>
                        <span class="distributor__item-text">Полное описание товаров</span>
                    </li>
                    <li class="distributor__item">
                        <svg class="distributor__icon" width="24" height="24">
                            <use href="./images/sprites.svg#21"></use>
                        </svg>
                        <span class="distributor__item-text">Актуальные цены</span>
                    </li>
                    <li class="distributor__item">
                        <svg class="" width="24" height="24">
                            <use href="./images/sprites.svg#23"></use>
                        </svg>
                        <span class="distributor__item-text">Лаки и краски</span>
                    </li>
                    <li class="distributor__item">
                        <svg class="distributor__icon" width="24" height="24">
                            <use href="./images/sprites.svg#20"></use>
                        </svg>
                        <span class="distributor__item-text">Химические производства</span>
                    </li>
                </ul>
                <a href="./images/ag-tech/3.jpg" download class="button distributor__button">

                    <svg class="distributor__icon" width="24" height="24">
                        <use href="./images/sprites.svg#download"></use>
                    </svg>
                    Скачать каталог
                </a>
            </div>
            <img src="./images/ag-tech/2.png" alt="" class="distributor__image" loading="lazy" width="960" height="676">
        </div>
    </section>



    <?php include_once('./template-parts/research-block.php') ?>
    <?php include_once('./template-parts/steps-swiper-block.php') ?>
    <?php include_once('./template-parts/clients-block.php') ?>
    <?php include_once('./template-parts/cta.php') ?>
</main>
<?php include_once('./template-parts/footer.php') ?>
<?php include_once('./template-parts/modals.php') ?>
</body>