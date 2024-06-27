<?php get_header(); ?>
<body>
<main class="main">
    <section id="top__content-about">
        <div class = "top__content-about-mv">
            <div class="top__content-about-mv-1">
                <h1>プロフェッショナル</h1>
            </div>
            <div class="top__content-about-mv-2">
                <h1>で溢れる社会に</h1>
            </div>
        </div>
    </section>
    <section id="top__content-company">
        <div>
            <div class="top__content-title top__content-company-title">
                <h1>Company</h1>
            </div>
            <div class="top__content-company-detail">
                <div class="top__content-company-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/progeec_top.png" alt="人が話してるみたいな写真"></src>

                </div>
                <div class="top__content-company-text">
                    <h1>企業・人へ「100%を超える101％の価値、1%の感動」を届ける最高のフィクサーを目指します</h1>
                    <p></p>
                    <a class="component__btn-readmore" href="<?php echo home_url(); ?>/company">Read More</a>

                </div>

            </div>

        </div>
    </section>
    <section id="top__content-service">
        <div>
            <div class="top__content-title top__content-service-title">
                <h1>Service</h1>
            </div>
            <div class="top__content-service-detail">
            <div class="top__content-service-text">
                    <h1>貴社人材の母集団形成からサポートさせていただきます</h1>
                    <p>当社の人材紹介事業では、
                        リクルーティングアドバイザー（RA）がお預かりした求人情報を基に、
                        キャリアアドバイザー（CA）がキャリアカウンセリングを実施。
                        適切なマッチングを行い、貴社の採用ターゲットに合った適切な人材をご紹介します。</p>
                    <a class="component__btn-readmore" href="<?php echo home_url(); ?>/service">Read More</a>
            </div>

                <div class="top__content-service-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/progeec_business.png" alt="事業のイメージ画像or幾何学的な画像"></src>
                </div>
        </div>
        </div>
    </section>
    <section id="top__content-news">
        <div class="top__content-news-detail">
            <div class="top__content-title top__content-news-title">
                <h1>News</h1>
            </div>
            <div class = "p__achive-news">
<?php
    $args = array(
        'post_type' => 'news_page',
        'posts_per_page' => 12,
    );
    $news_query = new WP_Query($args);
    if ($news_query->have_posts()) : ?>
        <dl class="p__achive-news__item">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <dt><?php the_time('Y-m-d'); ?></dt>
                <dd>
                    <a class= "p__achive-news__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </dd>
                <span class = "c__line-horizontal"></span>
            <?php endwhile; ?>
        </dl>
    <?php endif;
    wp_reset_postdata();
    ?>

        <a class="component__btn-readmore" href="<?php echo home_url(); ?>/news">Read More</a>

        </div>
    </section>
    
    <section id="top__content-contact">
        <div>
            <div class="top__content-title top__content-contact-title">
                <h1>Contact</h1>
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
</body>
<?php get_footer(); ?>