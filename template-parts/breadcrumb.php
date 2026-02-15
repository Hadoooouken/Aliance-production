<?php
$breadcrumb_middle = isset($breadcrumb_middle) ? $breadcrumb_middle : '';
?>

<ul class="breadcrumb">
    <li class="<?= $breadcrumb_color ?>">
        <a class="breadcrumb__link" href="#">Главная <span class="breadcrumb__line">—</span></a>
    </li>

    <!-- Средняя крошка, если есть -->
    <?php if ($breadcrumb_middle): ?>
        <li class="<?= $breadcrumb_color ?> breadcrumb__middle">
            <?= $breadcrumb_middle ?> <span class="breadcrumb__line">—</span>
        </li>
    <?php endif; ?>

    <li class="<?= $breadcrumb_color ?> breadcrumb__current">
        <?= $page_title ?> <span class="breadcrumb__line">—</span>
    </li>
</ul>