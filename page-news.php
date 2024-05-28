<?php
/*
* Template Name: News
*/
?>
<?php get_header(); ?>

<main>
<div class = "about__mv about-mission__mv">
    <h1>NEWS</h1>
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
    
</div>
    
</main>

<?php get_footer(); ?>
