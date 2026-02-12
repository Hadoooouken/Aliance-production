<?php
$page_title = "Блог";
$header_style = "hero--gray";
$breadcrumb_color = "breadcrumb__item";
$page_title_color = "hero__title ";
$page_class = 'page-inner page-blog';
include_once('./template-parts/head.php');
include_once('./template-parts/body.php');
include_once('./template-parts/header-page.php'); ?>
<main class="main--inner">
    <?php include_once('./template-parts/page-hero.php'); ?>
    <div class="container">
        <div class="blog__wrapper">
            <ul class="blog-card__list">
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card__description">Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени предоставлены...</p>
                        <img src="./images/blog/1.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card__description">Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                        <img src="./images/blog/2.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card__description">Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                        <img src="./images/blog/2.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card__description">Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени предоставлены...</p>
                        <img src="./images/blog/1.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card__description">Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени предоставлены...</p>
                        <img src="./images/blog/1.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card__description">Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                        <img src="./images/blog/2.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card__description">Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                        <img src="./images/blog/2.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card__description">Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени предоставлены...</p>
                        <img src="./images/blog/1.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card__description">Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени предоставлены...</p>
                        <img src="./images/blog/1.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
                <li class="">
                    <a href="" class="blog-card">
                        <h3 class="blog-card__title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card__description">Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                        <img src="./images/blog/2.jpg" alt="" class="blog-card__image" loading="lazy">
                    </a>
                </li>
            </ul>
            <nav class="pagination">
                <ul class="pagination__list">
                    <li><a href="#" class="pagination__link pagination__link--active">1</a></li>
                    <li><a href="#" class="pagination__link">2</a></li>
                    <li><a href="#" class="pagination__link">3</a></li>
                    <li><a href="#" class="pagination__link">4</a></li>
                    <li><a href="#" class="pagination__link">5</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <?php include_once('./template-parts/cta.php'); ?>
</main>
<?php include_once('./template-parts/footer.php'); ?>
<?php include_once('./template-parts/modals.php') ?>
</body>