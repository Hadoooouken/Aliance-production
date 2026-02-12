<?php
$page_title = "Контрактное производство";
$header_style = "hero--gray";
$breadcrumb_color = "breadcrumb__item";
$page_title_color = "hero__title ";
$page_class = 'page-inner';
include_once('./template-parts/head.php');
include_once('./template-parts/body.php');
include_once('./template-parts/header-page.php'); ?>
<main class="main--inner">
    <?php include_once('./template-parts/page-hero.php'); ?>
    <?php
    include_once('./template-parts/production-block.php'); ?>
    <?php include_once('./template-parts/seo-block.php'); ?>

    <?php include_once('./template-parts/cta.php'); ?>
</main>
<?php include_once('./template-parts/footer.php'); ?>
<?php include_once('./template-parts/modals.php') ?>
</body>