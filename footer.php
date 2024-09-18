<footer class="scrollAnim">
    <h2 class="footer-title">★こどもクリニック</h2>
    <div class="footer-wrapper">
        <div class="footer-adress">
            <p>電話番号：000-0000-0000<br>
            住所：テキストテキストテキストテキストテキスト<br>
            ○○駅徒歩5分</p>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="<?=home_url();?>">Home</a></li>
                <li><a href="detail">診療内容</a></li>
                <li><a href="<?=home_url();?>/#greeting">院長挨拶</a></li>
                <li><a href="archive">お知らせ</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="<?=home_url();?>/#access">診療時間・アクセス</a></li>
                <li><a href="archive-column">コラム</a></li>
                <li><a href="contact">お問い合わせ</a></li>
            </ul>
        </div>
    </div>
    <p class="copyright">&copy;こどもクリニック</p>
</footer>
<script src="<?=get_template_directory_uri(); ?>/animation.js"></script>
<script src="<?=get_template_directory_uri(); ?>/hamburger.js"></script>
<?php wp_footer(); ?>
</body>
</html>