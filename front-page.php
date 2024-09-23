<?php get_header() ?>
<main>
    <!-- first view -->
    <section id="fv" class="fv scrollAnim ready scrollScale">
                <picture>
                    <!-- ブラウザ幅最小～768pxまでスマホ用の画像が表示 -->
                    <source srcset="<?=get_template_directory_uri(); ?>/img/fv-sp.png" media="(max-width: 768px)" type="image/png">
                    <!-- ブラウザ幅390px～から最大幅までPC用の画像が表示 -->
                    <img src="<?=get_template_directory_uri(); ?>/img/fv-pc.png" alt=”ファーストビュー”>
                </picture>
            <h2>通いやすく頼れる<br>地域に愛されるこどもクリニック<br>を目指して</h2>
    </section>

    <!-- detail -->
    <section id="detail">
        <div class="section-inner scrollAnim">
            <h3 class="section-title">診療内容</h3>
            <div class="detail-items">
                <div class="detail-item">
                    <div class="detail-title">
                        <p>一般小児科診療</p>
                    </div>
                    <div class="detail-icon">
                        <img src="<?=get_template_directory_uri(); ?>/img/icon-pink-baby.png" alt="一般小児科診療">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-title">
                        <p>予防接種<br>定期健診</p>
                    </div>
                    <div class="detail-icon">
                        <img src="<?=get_template_directory_uri(); ?>/img/icon-pink-injection.png" alt="予防接種、定期健診">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-title">
                        <p>皮膚科</p>
                    </div>
                    <div class="detail-icon">
                        <img src="<?=get_template_directory_uri(); ?>/img/icon-pink-girl.png" alt="皮膚科">
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-title">
                        <p>小児科専門外来</p>
                    </div>
                    <div class="detail-icon">
                        <img src="<?=get_template_directory_uri(); ?>/img/icon-pink-expert.png" alt="小児科専門外来">
                    </div>
                </div>
            </div>
            <div class="detail-link">
                <a href="detail">詳しく見る→</a>
            </div>
        </div>
    </section>

    <!-- greeting -->
    <section id="greeting" class="yellow">
        <div class="section-inner scrollAnim">
            <h3 class="section-title">院長挨拶</h3>
            <div class="greeting-wrapper">
                <div class="greeting-text">
                    <h4>苗字　名前</h4>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキステキストテキストテキストテキスト</p>
                    <div class="career-items">
                        <div class="career-item">
                            <p>・経歴<br>△△大学医学部<br>△△大学病院専任講師<br>□□病院　小児科医長</p>
                        </div>
                        <div class="career-item">
                            <p>・資格<br>小児科専門医<br>小児科指導医<br>・所属学会<br>日本小児科学会</p>
                        </div>
                    </div>
                </div>
                <div class="greeting-img">
                <picture>
                    <!-- ブラウザ幅最小～768pxまでスマホ用の画像が表示 -->
                    <source srcset="<?=get_template_directory_uri(); ?>/img/dr-sp.png" media="(max-width: 768px)" type="image/png">
                    <!-- ブラウザ幅390px～から最大幅までPC用の画像が表示 -->
                    <img src="<?=get_template_directory_uri(); ?>/img/dr-pc.png" alt=”院長写真”>
                </picture>
                </div>
            </div>
        </div>
    </section>

    <!-- news -->
    <section id="news">
        <div class="section-inner scrollAnim">
            <h3 class="section-title">お知らせ</h3>
            <div class="news">
            <?php
            //query_posts('posts_per_page=3'); // 表示する投稿数を指定　→非推奨の関数、functions.phpに記載
            if( have_posts() ):
                while( have_posts() ) : the_post(); ?>
                    <article class="news-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-inner">    
                                <time><?=get_the_date();?></time>
                                <h4><?php the_title() ?></h4>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <div class="common__btn">
                <a href="archive">お知らせ一覧はこちら</a>
            </div>
        </div>
    </section>

    <!-- access -->
    <section id="access" class="yellow">
        <div class="section-inner scrollAnim">
            <h3 class="section-title">診療時間・アクセス</h3>
            <div class="access-wrapper">
                <div class="medical-hours">
                    <table>
                        <tr class="table-title">
                            <th></th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                            <th>日</th>
                        </tr>
                        <tr class="table-item">
                            <td>9:00～12:00</td>
                            <td>●</td>
                            <td>●</td>
                            <td>●</td>
                            <td>●</td>
                            <td>●</td>
                            <td>●</td>
                            <td>／</td>
                        </tr>
                        <tr class="table-item">
                            <td>13:00～17:30</td>
                            <td>●</td>
                            <td>●</td>
                            <td>●</td>
                            <td>●</td>
                            <td>●</td>
                            <td>★</td>
                            <td>／</td>
                        </tr>
                    </table>
                    <div class="medical-hours-text">
                        <p>［休診日］日曜、祝日</p>
                        <p><span class="pink">★</span>15:30まで(最終受付15:00)</p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6480.017011522295!2d139.7641609!3d35.7014083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c1906b94177%3A0x52108da82f5f9a99!2z5p2x5Lqs5Yy756eR5q2v56eR5aSn5a2m!5e0!3m2!1sja!2sjp!4v1725804571899!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <p>住所：テキストテキストテキスト<br>
                        ○○駅徒歩5分</p>
                </div>
            </div>
        </div>
    </section>

    <!-- column -->
    <section id="column">
        <div class="section-inner scrollAnim">
            <h3 class="section-title">コラム</h3>
            <div class="news">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 3, // 表示する投稿数を指定
                'post_type' => 'column', // カスタム投稿タイプを指定
                'paged'          => $paged,
                // 'order' => 'ASC', // 昇順に設定
                'orderby' => 'date' // 日付で並び替え
            );
            $the_query = new WP_Query($args); 
            if( $the_query->have_posts() ):
                while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article class="news-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-inner">    
                                <time><?=get_the_date();?></time>
                                <h4><?php the_title() ?></h4>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); // クエリをリセット ?>
            <?php endif; ?>
            </div>
            <div class="common__btn">
                <a href="archive-column">コラム一覧はこちら</a>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact" class="yellow">
        <div class="section-inner scrollAnim">
            <h3 class="section-title">お問い合わせ</h3>
            <div class="contact-text">
                <p>・定期健診のご予約に関して<br>
                ・職員採用に関して<br>
                は以下のボタンよりお問合せください。</p>
            </div>
            <div class="common__btn">
                <a href="contact">お問い合わせはこちら</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>