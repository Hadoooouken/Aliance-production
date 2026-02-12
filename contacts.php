<?php
$page_title = "Контакты";
$header_style = "hero--gray";
$breadcrumb_color = "breadcrumb__item";
$page_title_color = "hero__title ";
$page_class = 'page-inner page-contacts';
include_once('./template-parts/head.php');
include_once('./template-parts/body.php');
include_once('./template-parts/header-page.php'); ?>
<main class="main--inner">
    <?php include_once('./template-parts/page-hero.php'); ?>
    <section class="section section--spaced-lg">
        <div class="container">
            <?php include_once('./template-parts/contacts-block.php');
            include_once('./template-parts/map-block.php'); ?>

        </div>
    </section>
    <?php include_once('./template-parts/cta.php'); ?>
</main>
<?php include_once('./template-parts/footer.php'); ?>
<?php include_once('./template-parts/modals.php') ?>
</body>