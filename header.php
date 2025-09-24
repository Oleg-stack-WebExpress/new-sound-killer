<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="header__logo">
                    <a href="/"><img class="logo__img" src="<?= assets('images/bulkit-core.png'); ?>"
                            alt="logo"></img><span class="logo__left">BUL<span class="logo__rigth">KIT</span></span></a>
                </div>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="header__actions" style="display: flex; align-items: center; gap: 15px;">
                    <a href="#"><i class="icon-heart-empty"></i></a>
                    <a href="#"><i class="icon-basket-alt"></i></a>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="avatar" src="<?= assets('images/helen.jpg'); ?>" alt="avatar">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="main-content padding-top-100">