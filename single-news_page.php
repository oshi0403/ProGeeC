<?php get_header(); ?>

<main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <article class="article">
                <div class ="p__single-news__container">
                    <div class="p__single-news__info">
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                    </div>
                    <div class="p__single-news__title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="p__single-news__image">
                        <!-- ここに画像を出力するコードが入る場合 -->
                    </div>
                    <div class="p__single-news__content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
