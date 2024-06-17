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

load_theme_textdomain( 'your-text-domain', get_template_directory() . '/languages' );
//翻訳ファイルをロードするためのコード

function enqueue_custom_scripts() {
    // JavaScriptファイルを登録してキューに追加
    wp_enqueue_script('hamburger-script', get_template_directory_uri() . '/scripts/hamburger.js', array(), null, true);

    // JavaScriptファイルに渡すデータを用意
    $script_data = array(
        'originalSrc' => get_template_directory_uri() . '/assets/progeec_logo-mini.png',
        'newSrc' => get_template_directory_uri() . '/assets/progeec_logo_re-mini.png'
    );

    // wp_localize_script を使用してデータを渡す
    wp_localize_script('hamburger-script', 'logoData', $script_data);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
