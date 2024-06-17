<footer>
            <div class ="footer">
                <div class = "footer__inner">
                    <nav class = "footer__menu">
                        <ul class = "footer__menu-item">
                            <li class = "menu__item footer__menu-item-about">
                                <a href = "<?php echo home_url(); ?>/about">About us</a>
                                    <ul class = "footer__submenu">
                                        <li class = "footer__submenu-item"><a href = "<?php echo home_url(); ?>/about#about-mission">ミッション</a></li>
                                        <li class = "footer__submenu-item"><a href = "<?php echo home_url(); ?>/about#about-vision">ビジョン</a></li>
                                        <li class = "footer__submenu-item"><a href = "<?php echo home_url(); ?>/about#about-value">バリュー</a></li>
                                    </ul>
                            </li>
                            <li class = "menu__item footer__menu-item-company">
                                <a href = "<?php echo home_url(); ?>/company">Company</a>
                                <ul class = "footer__submenu">
                                    <li class = "footer__submenu-item"><a href = "<?php echo home_url(); ?>/company#greeting">代表挨拶</a></li>
                                    <li class = "footer__submenu-item"><a href = "<?php echo home_url(); ?>/company#company-info">会社概要</a></li>
                                </ul>
                            </li>
                                <li class = "menu__item footer__menu-item-service">
                                    <a href = "<?php echo home_url(); ?>/service">Service</a>
                                    <ul class = "footer__submenu">
                                        
                                    </ul>

                                </li>
                                <li class = "menu__item footer__menu-item-news"><a href = "<?php echo home_url(); ?>/news">News</a></li>
                                <!-- <li class = "menu__item footer__menu-item-recruit"> -->

                                <li class = "menu__item footer__menu-item-contact">
                                <a href = "<?php echo home_url(); ?>/#top__content-contact">Contact</a>
                                    <ul class = "footer__submenu">
                                    <li class = "footer__submenu-item"><a href = "<?php echo home_url(); ?>/#top__content-contact">お問い合わせ</a></li>
                                    </ul>
                                </li>
                        </ul>
                    </nav>
                </div>

            </div>
        
            <div class = "footer footer__border-top-black">
                <div class = "footer__inner">
                    <small class = "footer__copyright">
                        <p>©ProGeeC all right reserved.</p>
                        <a href = "<?php echo home_url(); ?>/policy">プライバシーポリシー</a>
                        <a href = "<?php echo home_url(); ?>/terms">当サービスのご利用規約</a>
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>
  