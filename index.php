<?php get_header(); ?>

<main class="main__page__top">
  <section class="container">

    <section class="fv_wrap">
      <section class="fv">
        <ul class="slide_wrap" id="slide_wrap">
          <li class="slide_item">
            <img src="<?php echo get_template_directory_uri(); ?>/imges/fv01.jpg" alt="img1" onload="sliderStart()" class="pc_only">
            <img src="<?php echo get_template_directory_uri(); ?>/imges/fv01_sp.jpg" alt="img1" onload="sliderStart()" class="sp_only">
          </li>
          <li class="slide_item">
            <img src="<?php echo get_template_directory_uri(); ?>/imges/fv02.jpg" alt="img2" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/imges/fv02_sp.jpg" alt="img2" class="sp_only">
          </li>
          <li class="slide_item">
            <img src="<?php echo get_template_directory_uri(); ?>/imges/fv03.jpg" alt="img3" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/imges/fv03_sp.jpg" alt="img3" class="sp_only">
          </li>
          <li class="slide_item">
            <img src="<?php echo get_template_directory_uri(); ?>/imges/fv04.jpg" alt="img4" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/imges/fv04_sp.jpg" alt="img4" class="sp_only">
          </li>
          <li class="slide_item">
            <img src="<?php echo get_template_directory_uri(); ?>/imges/fv05.jpg" alt="img5" class="pc_only"><img src="<?php echo get_template_directory_uri(); ?>/imges/fv05_sp.jpg" alt="img5" class="sp_only">
          </li>
        </ul>

        <div class="fv_in">
          <h2 class="font01">Your Dream, <br class="sp_only">Our Passion</h2>
          <p class="txt">すべての人の夢が、<br class="sp_only">私たちの原動力です。</p>
        </div><!-- end fv_in -->

      </section><!-- end fv -->

      <div class="slide_news">
        <div class="slider" id="slider" data-width="100">
          <button class="control_next">&rarr;</button>
          <ul class="clearfix">
            <li class="actslide">
              <div class="slide">
                <div class="shadow">
                  <div class="teaser item">
                    <div class="text">
                      <p class="category font01">NEWS</p>
                      <p class="date">2020.11.18</p>
                      <p class="name">コーポレートサイトを更新しました</p>
                    </div>
                  </div><!-- end teaser -->
                </div><!-- end shadow -->
              </div><!-- end slide -->
            </li>
            <li>
              <div class="slide">
                <div class="shadow">
                  <div class="teaser item">
                    <div class="text">
                      <p class="category font01">NEWS</p>
                      <p class="date">2020.3.7</p>
                      <p class="name">コーポレートサイトをリニューアルしました</p>
                    </div>
                  </div><!-- end teaser -->
                </div><!-- end shadow -->
              </div><!-- end slide -->
            </li>
          </ul>
        </div>
      </div><!-- end slide_news -->

    </section><!-- end fv_wrap -->


    <section class="about">
      <div class="unit_in">
        <div class="h3_ttl">
          <h3 class="font01 ef ef1_1">PHILOSOPHY <span class="cancel"></span> IT</h3>
          <p class="catch_ttl ef ef1_2">日本を再興させるくらいの<br><span class="font01">SUPRISE</span>をめざして</p>
          <p class="sub_ttl ef ef1_3">
            本当に良いものをたくさんの人に伝えたい。<br>
            変化するニーズと対峙し、最先端のデジタルマーケティングと不変的な本質思考の融合により、「一点」の価値を見出だします。
          </p>
        </div>
      </div>
      <div class="imges ef ef4">
        <img src="<?php echo get_template_directory_uri(); ?>/imges/about.jpg" alt="">
        <div class="ef4_cover_1"></div>
        <div class="ef4_cover_2"></div>
      </div>
    </section><!-- end about -->

    <section class="service">
      <div class="h3_ttl ef ef2_1">
        <h3 class="font01">SERVICE</h3>
        <p class="sub_ttl">FUKKOの主な事業ドメイン</p>
      </div>
      <div class="service_in">
        <div class="cnt">
          <div class="imges ef ef2_1"><img src="<?php echo get_template_directory_uri(); ?>/imges/service01.jpg" alt=""></div>
          <div class="txt_in">
            <h4 class=" ef ef2_1">経営者支援事業</h4>
            <p class="ttl ef ef2_2"><em>そこ、いいね！</em>っていわせるための支援</p>
            <p class="txt ef ef2_3">
              経営者（会社）様が描く想いを整理し、今までなかった未来を創るためのソリューション（手法）をご提供します。FUKKOの経営者支援事業のお客様は、大手企業ではなく100％中小企業です。<br>
              あらゆる企業コストの削減からデジタルトランスフォーメーション（DX）、組織・人事改革まで、お客様に貢献し、地域社会を豊かにする共創カンパニーです。
            </p>
          </div>
        </div><!-- end cnt -->
        <div class="cnt">
          <div class="imges ef ef2_1"><img src="<?php echo get_template_directory_uri(); ?>/imges/service02.jpg" alt=""></div>
          <div class="txt_in">
            <h4 class=" ef ef2_1">デジタルマーケティング</h4>
            <p class="ttl ef ef2_2"><em>それ、いいね！</em>って体感してもらう<br class="sp_only">マーケティング</p>
            <p class="txt ef ef2_3">
              WEBサイトのアクセスログ、購買データ、ユーザー行動に基づいたデータなどの今あるデータと、私たちが探究し続けている顧客理解・本質追及を掛け合わせることで今まで見えなかったことを見える化します。変化するニーズに対してPDCAをまわし続け、今この瞬間の最適解を共に導き出します。
            </p>
          </div>
        </div><!-- end cnt -->
        <div class="cnt">
          <div class="imges ef ef2_1"><img src="<?php echo get_template_directory_uri(); ?>/imges/service03.jpg" alt=""></div>
          <div class="txt_in">
            <h4 class=" ef ef2_1">WEBシステム・アプリ開発</h4>
            <p class="ttl ef ef2_2"><em>これ、いいわ！</em>といってもらえるサービスへ</p>
            <p class="txt ef ef2_3">
              時代をとらえる確かな視点で、変化するユーザの心を見つめて、新しいユーザー体験を創造する。<br>
              かつてない速さで進むテクノロジーの中で、変わらないユーザの本質や想いを、アプリによって伝えたい。<br>
              過去を振り返り楽しかった時、輝いていた時、今でも愛おしく想える時のような温かい気持ちを思い出して、未来という未知なる時に立ち向かい、新しい道を進む道標となるようなサービスを創ります。
            </p>
          </div>
        </div><!-- end cnt -->
      </div>
    </section><!-- end service -->

    <section class="geo">
      <div class="unit_in">
        <div class="h3_ttl">
          <h3 class="font01 ef ef3_1">MARKETINGの力でFUKKOさせる</h3>
          <p class="catch_ttl ef ef3_2 sub_ttl geo_sub_ttl">FUKKOとは本来もつ良さや想いを最大限広げる、輝きや生きがいを取り戻す</p>
          <p class="ef ef3_3 disc">
            徹底したインサイトと市場構造を分析し、多角的な視点から戦略を導き出します。<br>
            最適なプロモーションプランを構築、最新テクノロジーを駆使し、高いクオリティでの運用により、最大の成果を追求します。
          </p>
          <!-- <p class="sub_ttl ef ef3_3">
            スマホをみない日ってありますか？<br class="sp_only">もちろんないと思います。<br>
            Googleをみない日はありますか？<br class="sp_only">これもまたないかと思います。<br>
            Google検索、GoogleMap、Gmail、Youtubeなど今やGoogleは生活の一部になっています。<br class="sp_only">どんな業界、業種の企業にとっても、Googleとどう向き合うか、どのように活用するか必要課題です。<br>
            私たちはGoogleの最良な活用方法を探求し、最先端を走り続けます。
          </p> -->
        </div>
        <div class="cnt_in ef ef2_3">
          <div class="cnt">
            <div class="icon01 icon"><img src="<?php echo get_template_directory_uri(); ?>/imges/geo_01_who.png" alt=""></div>
            <div class="txt_in">
              <h4>WHO</h4>
              <!-- <p class="txt">Google Ads</p> -->
            </div>
          </div><!-- end cnt -->
          <div class="cnt">
            <div class="icon02 icon"><img src="<?php echo get_template_directory_uri(); ?>/imges/geo_02_what.png" alt=""></div>
            <div class="txt_in">
              <h4>WHAT</h4>
              <!-- <p class="txt">Search Engine <br class="sp_only">Optimization</p> -->
            </div>
          </div><!-- end cnt -->
          <div class="cnt">
            <div class="icon03 icon"><img src="<?php echo get_template_directory_uri(); ?>/imges/geo_03_where.png" alt=""></div>
            <div class="txt_in">
              <h4>WHERE</h4>
              <!-- <p class="txt">Google My Business</p> -->
            </div>
          </div><!-- end cnt -->
          <div class="cnt">
            <div class="icon04 icon"><img src="<?php echo get_template_directory_uri(); ?>/imges/geo_04_how.png" alt=""></div>
            <div class="txt_in">
              <h4>HOW</h4>
              <!-- <p class="txt">Google For Jobs</p> -->
            </div>
          </div><!-- end cnt -->
        </div><!-- end cnt_in -->
      </div>
      <div class="imges ef ef5">
        <img src="<?php echo get_template_directory_uri(); ?>/imges/geo_r.jpg" alt="">
        <div class="ef5_cover_1"></div>
        <div class="ef5_cover_2"></div>
      </div>
    </section><!-- end geo -->



    <?php
    // 新着の出力
    $news_posts = get_posts('post_type=post&posts_per_page=3');
    if (!empty($news_posts)) : ?>

      <section class="blog">
        <div class="h3_ttl ef ef2_1">
          <h3 class="font01">BLOG</h3>
        </div>
        <div class="blog_in">

          <?php
          foreach ($news_posts as $post) :
            setup_postdata($post); ?>

            <?php
            // カテゴリー情報を取得
            $cats = get_the_category();
            $cat = $cats[0];
            if (has_post_thumbnail()) {
              //アイキャッチ IDを取得して画像の「URL,横幅,高さ」を取得。
              //画像サイズは medium で出力しています。
              $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
            }
            ?>

            <div class="cnt">
              <a href="<?php the_permalink(); ?>">
                <?php if (get_the_post_thumbnail()) : ?>
                  <div class="image" style="background-image: url('<?php echo $image_url[0]; ?>')"></div>
                <?php else : ?>
                  <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/imges/og_image_logo.png')"></div>
                <?php endif; ?>

                <div class="info">
                  <div class="cat"><?php echo $cat->name; ?></div>
                  <div class="date"><?php the_time('Y.m.d') ?></div>
                </div>

                <div class="txt_in">
                  <h4 class=" ef ef2_1"><?php the_title(); ?></h4>
                </div>
              </a>
            </div><!-- end cnt -->

          <?php endforeach;
          wp_reset_postdata(); ?>

          <div class="link">
            <a href="<?php echo home_url() ?>/blog/">もっと見る</a>
          </div>

        </div>
      </section><!-- end service -->

    <?php endif; ?>

  </section><!-- end container -->

</main>

<?php get_footer(); ?>