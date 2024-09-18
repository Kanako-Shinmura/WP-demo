<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
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
        <h2><?php the_title(); ?></h2>
    </div>
</div>

<!-- 本文 -->
<article class="page-parts__article">
    <?php the_content(); ?>
</article>
<?php
    endwhile;
endif;
?>   
<?php get_footer(); ?>
