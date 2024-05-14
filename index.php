<?php get_header(); ?>

<main class="main">
    <section id="top__content-about">
        <div>
            <div class="top__content-about-mv">
                <h1>プロフェッショナル</h1>
            </div>
            <div class="top__content-about-mv-sub">
                <h1>で溢れる社会に</h1>
            </div>
        </div>
    </section>
    <section id="top__content-company">
        <div>
            <div class="top__content-title top__content-company-title">
                <h1>COMPANY</h1>
            </div>
            <div class="top__content-company-detail">
                <div class="top__content-company-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_ProGeeC_1.jpg" alt="イメージ画像"></src>

                </div>
                <div class="top__content-company-text">
                    <h1>～代表挨拶～</h1>
                    <p>代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部</p>
                    <a class="component__btn-readmore" href="<?php echo home_url(); ?>/company">Read More</a>

                </div>


            </div>

        </div>
    </section>
    <section id="top__content-service">
        <div>
            <div class="top__content-title top__content-service-title">
                <h1>SERVICE</h1>
            </div>
            <div class="top__content-service-detail">
                <div class="top__content-service-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_ProGeeC_1.jpg" alt="イメージ画像"></src>
                </div>

                <div class="top__content-service-text">
                    <h1>キャッチコピー</h1>
                    <p>文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります</p>
                    <a class="component__btn-readmore" href="<?php echo home_url(); ?>/service">Read More</a>
                </div>


            </div>
        </div>
    </section>
    <section id="top__content-news">
        <div class="top__content-news-detail">
            <div class="top__content-title top__content-news-title">
                <h1>NEWS</h1>
            </div>

        <a class="component__btn-readmore" href="<?php echo home_url(); ?>/news">Read More</a>

        </div>
    </section>
    
    <section id="top__content-contact">
        <div>
            <div class="top__content-title top__content-contact-title">
                <h1>CONTACT</h1>
            </div>
            <div class="c__form__contact">
                <h1>お問い合わせフォーム</h1>

                <?php echo do_shortcode('[contact-form-7 id="123" title="お問い合わせフォーム"]'); ?>

                <!-- <form action="<?php //echo home_url(); ?>/confirm" method="post" enctype="application/x-www-form-urlencoded">
                    <label for="worker">転職をお考えの方:</label>
                    <input type="radio" id="worker" name="which" value="求職者" autocomplete="off">
                    <label for="company">企業の方:</label>
                    <input type="radio" id="company" name="which" value="企業" autocomplete="off"><br>
                    <label for="name">名前：</label><br>
                    <input type="text" id="name" name="name" autocomplete="off"><br>
                    <label for="email">メールアドレス：</label><br>
                    <input type="email" id="email" name="email" autocomplete="off"><br>
                    <label for="tel">電話番号:</label><br>
                    <input type="tel" id="tel" name="tel" autocomplete="off"><br>
                    <label for="com-name">企業名（任意）</label><br>
                    <input type="text" id="com-name" name="com-name" autocomplete="off"><br>
                    <label for="content">お問い合わせ内容（詳細）:</label><br>
                    <textarea id="content" name="content" wrap="hard" autocomplete="off"></textarea><br>
                    <label for="agree"><a href="<?php //echo home_url(); ?>/policy">個人情報の取り扱いについて(プライバシーポリシー)</a></label><br>
                    <p>同意する<input type="checkbox" id="agree" name="agree" value="同意する"></p><br>

                    <input type="submit" id="submit" name="submit">

                </form> -->

            </div>


        </div>
    </section>
</main>
<!-- <a href = "?php echo home_url(); ?/policy">はホーム画面のurlに/policyを足すっていう意味 -->

<?php get_footer(); ?>