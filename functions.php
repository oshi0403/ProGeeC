<?php

function theme_setup(){

}
add_action('after_setup_theme', 'theme_setup');

function add_custom_theme_styles() {

    // styles.min.css ファイルをキューに追加
    wp_enqueue_style('styles', get_template_directory_uri() . '/styles/foundation/styles.min.css', array(), null, 'all');
}

// WordPress の初期化時にスタイルシートをキューに追加する関数をフック
add_action('wp_enqueue_scripts', 'add_custom_theme_styles');//パラメータがｗｐ関数の名前と自分で作ったｃｓｓを読み取る関数の名前

function create_post_type_news(){

}

// Wordpress関数では最後にadd_action関数をつけることで素の関数を有効化できる