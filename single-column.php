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
        <h2>コラム</h2>
    </div>
</div>

<!-- 本文 -->
<div class="single-news">
    <time><?=get_the_date();?></time>    
    <h3><?php the_title(); ?></h3>
    <div class="single-img">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="single-content">
        <?php the_content(); ?>
    </div>

</div>

<div class="single-link">
    <a href="archive-column">一覧に戻る</a>
</div>

<div class="single-links">
    <?php if (get_previous_post()):?>
        <?php previous_post_link('%link', '<i class="fa-solid fa-circle-arrow-left"></i>前の記事へ'); ?>
    <?php endif; ?>

    <?php if (get_next_post()):?>
        <?php next_post_link('%link', '次の記事へ<i class="fa-solid fa-circle-arrow-right"></i>'); ?>
    <?php endif; ?>
</div>



<?php
    endwhile;
endif;
?> 
<?php get_footer(); ?>