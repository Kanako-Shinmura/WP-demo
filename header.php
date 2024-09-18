<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>★こどもクリニック</title>
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.6.0/css/all.css">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <div class="logo">
                <a href="<?=home_url();?>"><h1>★こどもクリニック</h1></a>
            </div>
            <div class="nav menu-pc">
                <ul>
                    <li><a href="detail">診療内容</a></li>
                    <li><a href="<?=home_url();?>/#greeting">院長挨拶</a></li>
                    <li><a href="archive">お知らせ</a></li>
                    <li><a href="<?=home_url();?>/#access">診療時間・アクセス</a></li>
                    <li><a href="archive-column">コラム</a></li>
                    <li><a href="contact">お問い合わせ</a></li>
                </ul>
            </div>
            <!-- ハンバーガーメニュー -->
            <div id="btn" class="hamburger__btn">
                <i class="fas fa-bars"></i>
            </div>
            <ul id="menu" class="menu-sp">
                <li><a href="detail">診療内容</a></li>
                <li><a href="<?=home_url();?>/#greeting">院長挨拶</a></li>
                <li><a href="archive">お知らせ</a></li>
                <li><a href="<?=home_url();?>/#access">診療時間・アクセス</a></li>
                <li><a href="<?=home_url();?>/#column">コラム</a></li>
                <li><a href="contact">お問い合わせ</a></li>
            </ul>
            <div id="modal" class="modal-sp"></div>
        </div>
    </header>

