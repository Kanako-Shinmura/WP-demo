<?php get_header(); ?>
<?php
/*
Template Name: archive(お知らせ)
*/
?>

<!-- 記事ヘッダー -->
<div class="page-parts__header">
    <!-- 画像 -->
    <picture>
    <!-- ブラウザ幅最小～768pxまでスマホ用の画像が表示 -->
        <source srcset="<?=get_template_directory_uri(); ?>/img/sub-sp.png" media="(max-width: 768px)" type="image/png">
    <!-- ブラウザ幅390px～から最大幅までPC用の画像が表示 -->
        <img src="<?=get_template_directory_uri(); ?>/img/sub-pc.png" alt=”サブ画像”>
    </picture>
    <!-- タイトル -->
    <div class="page-parts__header-title">
        <h2>お知らせ</h2>
    </div>
</div>

<!-- 本文 -->
<?php
    //$argsの引数にパラメータを指定
    $args = array(
        'post_type' => 'post', //投稿ページ
        'posts_per_page' => 5, //表示する記事数
        'paged' => $paged, // 現在のページ番号 忘れるとページネーション効かない
    ); 

    // クエリの定義
    $the_query = new WP_Query($args);
?>
<div class="archive">
    <?php if ($the_query->have_posts()): ?>
        <?php while ( $the_query->have_posts()): $the_query->the_post(); ?>
        <article class="news-wrapper">
            <a href="<?php the_permalink(); ?>">
                <div class="news-inner">    
                    <time><?=get_the_date();?></time>
                    <h4><?php the_title() ?></h4>
                </div>
                <span class="archive-arrow">→</span>
            </a>
            </article>
        <?php endwhile ?>
    <?php endif ?>
    <?php wp_reset_postdata(); ?>
</div>

<!-- ページナビゲーション -->
<div class="pnavi">
    <?php
    global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');
        $paginate_base .= '%_%';
    }
    echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $the_query->max_num_pages,
        'mid_size' => 1,
        'current' => ($paged ? $paged : 1), 
        'prev_text' => '< 前へ',
        'next_text' => '次へ >',
    ));
    ?>
</div>

<?php get_footer(); ?>