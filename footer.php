</main>

<footer class="footer">
    <div class="container">
        <div class="footer__head">
            <div class="footer__head__text">
                <h3>Ready to get started?</h3>
                <p>Create your free account now</p>
            </div>
            <div class="footer__head__action">
                <a class="btn btn-primary">Try it free</a>
                <a class="btn btn-outline-primary">Chat with us</a>
            </div>
        </div>
        <div class="columns footer__body">
            <div class="row">
                <!-- Основное описание - занимает всю ширину на мобильных, половину на планшетах, 6 колонок на десктопе -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 columns-description">
                    <img class="small-footer-logo" src="<?= assets('images/bulkit-logo-g.png'); ?>" alt="logo">
                    <div class="footer-description">
                        <p>Bulkit is built for developers and designers. It's modular approach
                            lets you create an original landing page for your brand.</p>
                    </div>
                    <span class="moto">
                        <p>Designed and coded with <i class="icon-heart"></i>
                            by CSS Ninja.
                        </p>
                    </span>
                    <div class="social-links">
                        <a href="#">
                            <span class="icon">
                                <i class="icon-facebook"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="icon">
                                <i class="icon-twitter"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="icon">
                                <i class="icon-linkedin"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="icon">
                                <i class="icon-dribbble"></i>
                            </span>
                        </a>
                        <a href="#">
                            <span class="icon">
                                <i class="icon-github-circled"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Пустая колонка-разделитель - скрывается на мобильных и планшетах -->
                <div class="d-none d-lg-block col-lg-2 col-xl-2"></div>

                <!-- Колонки меню - на мобильных: 2 в ряд, на планшетах: 3 в ряд, на десктопе: по 2 колонки -->
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 pages-main">
                    <ul class="footer__column">
                        <li class="column-header">BULKIT</li>
                        <li class="column-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="column-item">
                            <a href="#">Pricing</a>
                        </li>
                        <li class="column-item">
                            <a href="#">Get started</a>
                        </li>
                        <li class="column-item">
                            <a href="#">Help</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 pages-additionally">
                    <ul class="footer__column">
                        <li class="column-header">RESSOURCES</li>
                        <li class="column-item">
                            <a href="#">Learning</a>
                        </li>
                        <li class="column-item">
                            <a href="#">Support center</a>
                        </li>
                        <li class="column-item">
                            <a href="#">Frequent questions</a>
                        </li>
                        <li class="column-item">
                            <a href="#">Schedule a demo</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 pages-terms">
                    <ul class="footer__column">
                        <li class="column-header">TERMS</li>
                        <li class="column-item">
                            <a href="#">Terms of Service</a>
                        </li>
                        <li class="column-item">
                            <a href="#">Privacy policy</a>
                        </li>
                        <li class="column-item">
                            <a href="#">SaaS services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <p>
                © 2019-2020 | <a href="https://cssninja.io/">Css Ninja</a> | All
                Rights Reserved.
            </p>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>



</body>

</html>