<?php
$page_title = "Блог";
$header_style = "hero--gray";
$breadcrumb_color = "breadcrumb__item";
$page_title_color = "hero__title ";
$page_class = 'page-inner';
include_once('./head.php');
include_once('./body.php');
include_once('./header-page.php'); ?>

<main class="main--inner">
    <?php include_once('./template-parts/blog-swiper-block.php') ?>

    <?php include_once('./cta.php'); ?>
</main>
<?php include_once('./footer.php'); ?>
<?php include_once('./template-parts/modals.php') ?>
</body>