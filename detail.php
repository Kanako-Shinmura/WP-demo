<?php get_header(); ?>
<?php
/*
Template Name: detail(診療内容)
*/
?>

<!-- ヘッダー -->
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
        <h2>診療内容</h2>
    </div>
</div>

<!-- 本文 -->
<div class="page-detail">
    <h3 class="page-detail_title">
        一般小児科診療
    </h3>
    <div class="page-detail_icons">
        <div class="page-detail_icon">
            <h4>発熱</h4>
            <div class="page-detail_icon_img">
            <img src="<?=get_template_directory_uri(); ?>/img/icon-y-fever.png" alt=”発熱”>
            </div>
        </div>
        <div class="page-detail_icon">
            <h4>鼻水・咳</h4>
            <div class="page-detail_icon_img">
            <img src="<?=get_template_directory_uri(); ?>/img/icon-y-snot.png" alt=”鼻水・咳”>
            </div>
        </div>
        <div class="page-detail_icon">
            <h4>腹痛・下痢</h4>
            <div class="page-detail_icon_img">
            <img src="<?=get_template_directory_uri(); ?>/img/icon-y-stomach.png" alt=”腹痛・下痢”>
            </div>
        </div>
    </div>
    <div class="page-detail_text">
        <p>突然の発熱、長引く鼻水や咳、嘔吐や下痢など、お子様の体調が当日すぐれない場合に受診ください。<br>
            発疹、体重が増えない、離乳食が進まない、など些細なことでもご相談いただけます。</p>
    </div>

    <h3 class="page-detail_title">
        予防接種・定期健診
    </h3>
    <div class="page-detail_icons">
        <div class="page-detail_icon">
            <h4>予防接種</h4>
            <div class="page-detail_icon_img">
            <img src="<?=get_template_directory_uri(); ?>/img/icon-y-injection.png" alt=”予防接種”>
            </div>
        </div>
        <div class="page-detail_icon">
            <h4>定期健診</h4>
            <div class="page-detail_icon_img">
            <img src="<?=get_template_directory_uri(); ?>/img/icon-y-scale.png" alt=”定期健診”>
            </div>
        </div>
    </div>
    <div class="page-detail_text">
        <p>予防接種（ワクチン）スケジュールの相談、忘れやすいワクチンの確認も行います。<br>
            当院では、ワクチンの同時接種をお勧めしております。ご希望があれば、個々の患者さんに応じて接種本数の調整も行いますので、ご相談ください。<br>
            健診は、3～4か月健診、7か月健診、5歳健診を定期健診として行っています。その時期以外でも、成長や発達で気になること、心配なことがございましたら、自費での健診をお受けしております。<br>
            1歳以降での健診では「視力検査機」を使用した視力検査も行います。</p>
    </div>

    <h3 class="page-detail_title">
        皮膚科
    </h3>
    <div class="page-detail_text">
        <p>湿疹だけでなく、アレルギーに関連する皮膚疾患、細菌やウイルスによる皮膚疾患、汗による皮膚疾患等、
        気になることが気兼ねなくご相談ください。</p>
    </div>

    <h3 class="page-detail_title">
        小児科専門外来
    </h3>
    <div class="page-detail_text">
        <p>喘息、アトピー、食物アレルギー、花粉症などアレルギーに関する診療・ご相談をお受けしております。
        その他、発達・発育相談も受け付けます。</p>
    </div>

</div>

<?php get_footer(); ?>