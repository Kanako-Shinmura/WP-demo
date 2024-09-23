<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function custom_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' ); // 追加　タイトルが動的に出力される
}
add_action('after_setup_theme', 'custom_theme_setup');

function load_custom_scripts() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_custom_scripts');

//front-pageでのお知らせ投稿の表示を3件にする
function modify_main_query( $query ) {
    // 管理画面や他のクエリを除外して、メインクエリのみ変更する
    if ( !is_admin() && $query->is_main_query() && is_home() ) {
        // 表示する投稿数を3件に変更
        $query->set( 'posts_per_page', 3 );
    }
}
add_action( 'pre_get_posts', 'modify_main_query' );

//コンタクトフォームのCSS
function enqueue_custom_styles() {
    // 現在のページが/contactページの場合
    if (is_page('contact')) {
        // Contact Form 7用のカスタムCSS
        wp_enqueue_style('contact-form-style', get_template_directory_uri() . '/css/style-cf7.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

?>

