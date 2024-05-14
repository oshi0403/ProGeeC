<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8"/>
        <meta name="viewport" content="width=device-width" />

        <title><?php wp_title(); ?>ProGeeC</title>
        <?php wp_head(); ?>

        <link href ="https://cdn.jsdelivr.net/npm/css-wipe@4.3.0/index.min.css" rel ="stylesheet"><!--リセットCSS-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/><!--矢印のためのフォントを表示するためのリンク-->

        <!-- <link href = "styles/foundation/styles.min.css" rel = "stylesheet"> -->
        
    </head>

    <body>

        <header class = "header">
            <div class = "header__inner">
                <a href = "<?php echo home_url(); ?>"><img  class = "header__logo" src = "<?php echo get_template_directory_uri(); ?>/assets/logo_ProGeeC_1.jpg" alt = "progeecのロゴ"></a>
                <button class = "l__header__hamburger">
                    <span class = "l__header__hamburger__1"></span>
                    <span class = "l__header__hamburger__2"></span>
                    <span class = "l__header__hamburger__3"></span>
                </button>
                <nav class = "header__menu">
                    <ul>
                        <li><a href = "<?php echo home_url(); ?>/about" class = "header__menu header__menu-about">About us</a></li>
                        <li><a href = "<?php echo home_url(); ?>/company" class = "header__menu header__menu-company">Company</a></li>
                        <li><a href = "<?php echo home_url(); ?>/service" class = "header__menu header__menu-service">Service</a></li>
                        <li><a href = "<?php echo home_url(); ?>/news?>" class = "header__menu header__menu-news">News</a></li>
                        <li><a href = "<?php echo home_url(); ?>/recruit" class = "header__menu header__menu-recruit">Recruit</a></li>
                        <li><a href = "#top__content-contact" class = "header__menu header__menu-contact">Contact</a></li>
                    </ul>
                </nav>

            </div>
        </header>