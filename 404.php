<?php
$page_title = "404";
$header_style = "hero--gray";
$breadcrumb_color = "breadcrumb__item";
$page_class = 'page-inner';
include_once('./template-parts/head.php');
include_once('./template-parts/body.php');
include_once('./template-parts/header-page.php') ?>
<main class="main--inner">
    <div class="container">
        <div class="not-found">
            <h1 class="not-found__title">404</h1>
            <p class="not-found__text not-found__text--lg">Страница не найдена</p>
            <p class="not-found__text not-found__text--sm">Мы не смогли найти страницу с таким адресом, попробуйте
                перейти на главную
                или
                напишите нам.</p>
            <a class="button not-found__button" href="./index.php">Вернуться на главную</a>
        </div>
    </div>
</main>
<hr class="divider-line divider-line--footer">
<?php include_once('./footer.php') ?>
<?php include_once('./template-parts/modals.php') ?>
</body>