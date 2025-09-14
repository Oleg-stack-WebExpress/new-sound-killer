<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- Вебмастер -->

    <!-- /Вебмастер  -->


    <?php wp_head(); ?>

    <!-- Yandex.Metrika counter -->

    <!-- /Yandex.Metrika counter -->

</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="header__grid">
                    <!-- Меню -->
                    <div class="header__col header__col--menu">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'top',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'navbar-nav',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                                'link_class' => 'nav-link'
                            ]);
                            ?>
                        </div>
                    </div>

                    <!--наполнение меню еще...-->

                    <!-- Кнопка меню -->
                    <div class="header__col header__col--toggler">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">