<?php get_header();?>

<main>
    <?php
    $args = array(
        'post_type' => 'news_page',
        'post_per_page' => 12,
    );
    $news_query = new WP_Query($args);
    if($news_query->have_posts())?>

    
    <dl class= "p__archive-news__item">
    <?php while($news_query->have_posts()){
            $news_query->the_post();
    }?>
    <dt><?php the_time('Y-m-d'); ?><dt>
    <dd><a href = "<?php the_permalink(); ?>"><?php the_title();?></a><dd>
    </dl>



    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

</main>

<?php get_footer();?>