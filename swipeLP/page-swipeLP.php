<?php /* Template Name:swipeLP  */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SwipeLP</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/swipeLP/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php wp_head(); ?>
  <!-- Googleタグマネージャー -->
  <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-M4W36TR"></script>
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M4W36TR');
  </script>
  <!-- Googleタグマネージャー終了 -->
</head>

<body>
  <!-- Googleタグマネージャー（noscript） -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4W36TR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- Googleタグマネージャー終了 -->
  <?php wp_body_open(); ?>
  <div class="container">
    <main class="main">
      <header>
        <div class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/header/logo.png" alt="">
        </div>
      </header>
      <!-- TODO チャットボットの作成があるまで非表示 -->
      <!-- <div class="question">
        <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/question/question.png" class="pc-only" alt="">
        <div class="question-sp sp-only">
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/question/question-hatena.svg" alt="">
        </div>
      </div> -->
      <div class="demo-button sp-only">
        デモ画面<br />を見る
      </div>
      <section class="reservation-button sp-only">
        <a href="<?php echo esc_url(home_url('/reservation')); ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/sidebar/sidebar-mail.svg" alt="">
          無料デモ作成依頼はこちらから
        </a>
      </section>
      <section class="introduction">
        <div class="introduction-left">
          <div class="introduction-top-textArea">
            <p>フルスクリーン×スワイプの</p>
            <p>ワクワク感でCVRを向上</p>
          </div>
          <p class="introduction-title-text">スマホ特化型フルスクリーン<br class="sp-only">エキサイティングページ</p>
          <h1 class="introduction-title-image"><img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/introduction/title.jpg" alt=""></h1>
          <p class="introduction-bottom-text">
            実店舗で商品を選んでいるようなワクワク感を<br class="sp-only">Web上で実現できる<br />
            スマートフォンに最適化した次世代型LPです。<br />
            ワクワク感を提供することにより<br class="sp-only">CVRがアップします。
          </p>
          <a href="https://fukko.jp/contact/" class="introduction-bottom-button" target="_blank">
            お問い合わせはこちら
          </a>
        </div>
        <div class="introduction-right">
          <div class="introduction-right-textArea">
            <p class="pc-only">
              お肉焼いてみました。<br />
              こちらをSwipeしてみてください。<br />
              食べたくなりましたよね！？
            </p>
            <p class="sp-only">
              お肉焼いてみました。<br />
              こちらをタップしてみてください！<br />
              食べたくなりましたよね！？
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/introduction/introduction-arrow.svg" class="pc-only" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/introduction/introduction-arrow-sp.svg" class="sp-only" alt="">
          </div>
        </div>
      </section>
      <!-- TODO 別対応 -->
      <!-- <section class="news">
        <div class="news-head">
          <h2>News</h2>
          <a href="<?php echo esc_url(home_url('/news')); ?>" class="news-button">
            <p>一覧を見る</p>
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/news/news-button.svg" alt="">
          </a>
        </div>
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
        );
        $news_query = new WP_Query($args);
        ?>
        <div class="swiper news-swiper">
          <ul class="swiper-wrapper news-swiper-list">
            <?php if ($news_query->have_posts()) : ?>
              <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <li class="swiper-slide news-swiper-items">
                  <a href="">
                    <?php
                    // 記事内容から最初の画像を取得
                    $content = get_the_content();
                    $img_src = '';

                    // パターンマッチングを使って最初の画像を取得
                    preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
                    if (!empty($matches[1])) {
                      $img_src = $matches[1];
                    } else {
                      $img_src = get_template_directory_uri() . '/swipeLP/img/thumbnail.png';
                    }
                    ?>
                    <img src="<?php echo esc_url($img_src); ?>" alt="">
                    <time><?php echo get_the_date("Y.m.d"); ?></time>
                    <p><?php the_title() ?></p>
                  </a>
                </li>
              <?php endwhile;
              wp_reset_postdata(); ?>
            <?php else : ?>
            <?php endif; ?>
          </ul>
          <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/news/news-left-arrow.svg" alt="">
          </div>
          <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/news/news-right-arrow.svg" alt="">
          </div>
        </div>
      </section> -->
      <section class="realization">
        <div class="realization-left">
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/realization/realization-image.png" alt="">
        </div>
        <div class="realization-right">
          <ul>
            <li>
              <p>
                まるで店舗で<br class="sp-only">選んでいるような</p>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/realization/realization-check.svg" alt="">
                <p>ライブ感</p>
              </div>
            </li>
            <li>
              <p>まるで商品を<br class="sp-only">手に取っているような</p>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/realization/realization-check.svg" alt="">
                <p>躍動感</p>
              </div>
            </li>
            <li>
              <p>ついつい<br class="sp-only">スワイプしたくなる</p>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/realization/realization-check.svg" alt="">
                <p>シズル感</p>
              </div>
            </li>
            <li>
              <p>スワイプした先に欲しいものを見つけた時の</p>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/realization/realization-check.svg" alt="">
                <p>満足感</p>
              </div>
            </li>
          </ul>
          <p class="realization-text01">
            CVRアップの鍵となるこれらの<br class="sp-only">ワクワク感が
          </p>
          <p class="realization-text02">
            <span>SwipeLPで全て実現</span><br class="sp-only">できます!!
          </p>
        </div>
      </section>
      <section class="cvr">
        <h2 class="sub-title">
          スマートフォンユーザーの<br class="sp-only" />CVRを上げることが<br class="pc-only" />
          必須の時代
        </h2>
        <p class="cvr-text">
          ユーザーは「調べる」際にPCではなくスマートフォンを使用することが主流となっています。<br />
          大多数がスマートフォンを使用してHPに訪問しているため、スマートフォンからのCVRを向上させることが必須です！
        </p>
        <div class="cvr-chart">
          <p class="cvr-chart-title">デバイス別HP流入数</p>
          <p class="cvr-chart-text">モバイルからの流入が<span>85%</span>以上!!</p>
          <ul class="cvr-chart-list">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/cvr/chart01-01.png" class="first-01" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/cvr/chart01-02.png" class="first-02" alt="">
              <canvas id="chart01" class="chart" data-number="88.2" data-values="88.2,9.7,1.1"></canvas>
              <p>フィットネススポーツジム</p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/cvr/chart02-01.png" class="second-01" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/cvr/chart02-02.png" class="second-02" alt="">
              <canvas id="chart02" class="chart" data-number="92.6" data-values="92.6,6.4,1.0"></canvas>
              <p>EC業界</p>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/cvr/chart03-01.png" class="third-01" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/cvr/chart03-02.png" class="third-02" alt="">
              <canvas id="chart03" class="chart" data-number="89.6" data-values="89.6,9.3,1.1"></canvas>
              <p>ハウスメーカー</p>
            </li>
          </ul>
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/cvr/cvr-01.png" class="cvr-chart-arrow" alt="">
        </div>
      </section>
      <section class="banner">
        <div class="banner-inner">
          <div class="banner-inner-left">
            <p class="banner-inner-left-text01">
              ワクワク感を提供できるSwipeLPを使えば
            </p>
            <p class="banner-inner-left-text02">
              <span>CVRの向上を実現</span>できます！
            </p>
            <a href="https://fukko.jp/contact/" class="banner-inner-left-button" target="_blank">
              お問い合わせはこちら
            </a>
          </div>
          <div class="banner-inner-right">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/banner/banner-01.png" alt="">
          </div>
        </div>
      </section>
      <section class="feature">
        <h2 class="sub-title">SwipeLPの特長</h2>
        <div class="feature-01">
          <div class="feature-odd-inner">
            <div class="feature-odd-left">
              <div class="feature-point">
                <div class="circle"></div>
                <p>POINT01</p>
              </div>
              <h3 class="feature-inner-title">ページ遷移が少なく<br />イチオシ商品を見てもらいやすい</h3>
              <p class="feature-text">
                通常のLPでは、商品一覧と個別ページの往復が発生します。その結果、「往復がめんどくさいから購入はやめよう」と、ユーザーが離脱しやすくなってしまいます。しかしSwipe
                LPなら、ページ遷移や往復が少なくスワイプ操作のみで完結するため、ユーザーはワクワクして飽きることがなく、広告主も本当に売りたいイチオシ商品のみをユーザーへアピールすることができます！</p>
            </div>
            <div class="feature-01-right">
              <p>通常のサイトLP</p>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/feature/feature-01.png" alt="">
            </div>
            <div class="feature-odd-image"></div>
          </div>
        </div>
        <div class="feature-even">
          <div class="feature-even-inner">
            <div class="feature-even-left">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/feature/feature-02.png" alt="">
            </div>
            <div class="feature-even-right">
              <div class="feature-point">
                <div class="circle"></div>
                <p>POINT02</p>
              </div>
              <h3 class="feature-inner-title">
                フルスクリーン×スワイプ表示で<br />商品を魅力的にアピール
              </h3>
              <p class="feature-text">
                一般的なサイトをスマホで見た際、商品やサービス一覧ページの画像は約2cm。商品画像やサービス画像が小さすぎて、一見しただけでは良い商品だということが伝わりません。しかし、Swipe
                LPならフルスクリーン×スワイプで商品が表示されるので、ユーザーへまるで店舗で商品を選んでいるようなワクワク感を感じさせることができ、商品の魅力を最大限に伝えることができます！</p>
            </div>
            <div class="feature-even-image"></div>
          </div>
        </div>
        <div class="feature-03">
          <div class="feature-odd-inner feature-03-inner">
            <div class="feature-odd-left">
              <div class="feature-point">
                <div class="circle"></div>
                <p>POINT03</p>
              </div>
              <h3 class="feature-inner-title">ページの読み込みに時間が<br />かからない</h3>
              <p class="feature-text">
                ページの読み込み速度が1秒遅れるとCVRが7%落ちるというリサーチ結果もある通り、ページの読み込み速度はユーザーにとってかなり重要です。読み込み時間を待っているとユーザーのワクワク感は逃げていき、離脱に繋がってしまいます。一度離脱したユーザーはサイトに戻ってこないこともあり、広告主は商品を見てもらえる土俵にすら立てなくなってしまいます。Swipe
                LPなら、読み込み速度がとても早いため、そのような心配がありません！</p>
            </div>
            <div class="feature-01-right">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/feature/feature-03.png" alt="">
            </div>
            <div class="feature-odd-image"></div>
          </div>
        </div>
        <div class="feature-even">
          <div class="feature-even-inner">
            <div class="feature-even-left">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/feature/feature-04.png" alt="">
            </div>
            <div class="feature-even-right">
              <div class="feature-point">
                <div class="circle"></div>
                <p>POINT04</p>
              </div>
              <h3 class="feature-inner-title">
                通常のLPよりも安く、<br />制作期間も短い
              </h3>
              <p class="feature-text">
                通常のLPを制作する場合、1〜2か月ほどの制作期間が必要となり、費用も少なくても30万円ほどかかります。<br />しかしSwipeLPなら、リーリスまでの期間は最短で5日、料金も5万円からで制作することが可能です！
              </p>
            </div>
            <div class="feature-even-image"></div>
          </div>
        </div>
      </section>
      <section class="delivery">
        <h2 class="sub-title">SwipeLP配信事例</h2>
        <ul class="delivery-list">
          <li>
            <div class="delivery-case">
              <div class="circle"></div>
              <p>case01</p>
            </div>
            <h3>かねふくめんたいパーク<br class="sp-only">群馬店様</h3>
            <div class="delivery-case01-inner pc-only">
              <div class="delivery-case01-inner-left">
                <p>通常サイト</p>
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item01-01.png" alt="">
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-arrow.svg" class="delivery-case01-inner-arrow" alt="">
              <div class="delivery-case01-inner-right">
                <div class="delivery-case01-inner-right-left">
                  <p>SwipeLP</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item01-02.png" alt="">
                </div>
                <div class="delivery-case01-inner-right-right">
                  <div class="delivery-case01-inner-right-right-textArea">
                    <p class="delivery-case01-inner-right-right-text01">ワクワクポイント</p>
                    <p class="delivery-case01-inner-right-right-text02">スワイプしたくなる</p>
                    <p class="delivery-case01-inner-right-right-text03">シズル感</p>
                  </div>
                  <div class="delivery-case01-inner-right-right-qr">
                    <p>実際のサイトはこちらから</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item01-qr.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="delivery-inner-sp sp-only">
              <p class="delivery-inner-textArea01-sp">
                ワクワクポイント
              </p>
              <p class="delivery-inner-textArea02-sp">
                スワイプしたくなる
              </p>
              <p class="delivery-inner-textArea03-sp">
                シズル感
              </p>
              <p class="delivery-inner-textArea04-sp">
                通常サイト<br />（横にスクロールできます）
              </p>
              <div class="js-scrollable delivery-inner-scrollArea">
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item01-scroll.png" alt="">
              </div>
              <a href="https://gunma-mentai-park.swipe-lp.io" class="delivery-inner-link" target="_blank">
                実際のサイトはこちらから
              </a>
            </div>
          </li>
          <li>
            <div class="delivery-case">
              <div class="circle"></div>
              <p>case02</p>
            </div>
            <h3>アップルホーム様</h3>
            <div class="delivery-case01-inner pc-only">
              <div class="delivery-case01-inner-left">
                <p>通常サイト</p>
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item02-01.png" alt="">
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-arrow.svg" class="delivery-case01-inner-arrow" alt="">
              <div class="delivery-case01-inner-right">
                <div class="delivery-case01-inner-right-left">
                  <p>SwipeLP</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item02-02.png" alt="">
                </div>
                <div class="delivery-case01-inner-right-right">
                  <div class="delivery-case01-inner-right-right-textArea">
                    <p class="delivery-case01-inner-right-right-text01">ワクワクポイント</p>
                    <p class="delivery-case01-inner-right-right-text02">モデルハウスに<br />来ているかのような</p>
                    <p class="delivery-case01-inner-right-right-text03">ライブ感</p>
                  </div>
                  <div class="delivery-case01-inner-right-right-qr">
                    <p>実際のサイトはこちらから</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item02-qr.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="delivery-inner-sp sp-only">
              <p class="delivery-inner-textArea01-sp">
                ワクワクポイント
              </p>
              <p class="delivery-inner-textArea02-sp">
                モデルハウスに<br />来ているかのような
              </p>
              <p class="delivery-inner-textArea03-sp">
                ライブ感
              </p>
              <p class="delivery-inner-textArea04-sp">
                通常サイト<br />（横にスクロールできます）
              </p>
              <div class="js-scrollable delivery-inner-scrollArea">
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item02-scroll.png" alt="">
              </div>
              <a href="https://apple-reform.swipe-lp.io" class="delivery-inner-link" target="_blank">
                実際のサイトはこちらから
              </a>
            </div>
          </li>
          <li>
            <div class="delivery-case">
              <div class="circle"></div>
              <p>case03</p>
            </div>
            <h3>WE HUB様</h3>
            <div class="delivery-case01-inner pc-only">
              <div class="delivery-case01-inner-left">
                <p>通常サイト</p>
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item03-01.png" alt="">
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-arrow.svg" class="delivery-case01-inner-arrow" alt="">
              <div class="delivery-case01-inner-right">
                <div class="delivery-case01-inner-right-left">
                  <p>SwipeLP</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item03-02.png" alt="">
                </div>
                <div class="delivery-case01-inner-right-right">
                  <div class="delivery-case01-inner-right-right-textArea">
                    <p class="delivery-case01-inner-right-right-text01">ワクワクポイント</p>
                    <p class="delivery-case01-inner-right-right-text02">商品を手に取って<br />いるかのような</p>
                    <p class="delivery-case01-inner-right-right-text03">躍動感</p>
                  </div>
                  <div class="delivery-case01-inner-right-right-qr">
                    <p>実際のサイトはこちらから</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item03-qr.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="delivery-inner-sp sp-only">
              <p class="delivery-inner-textArea01-sp">
                ワクワクポイント
              </p>
              <p class="delivery-inner-textArea02-sp">
                商品を手に取って<br />いるかのような
              </p>
              <p class="delivery-inner-textArea03-sp">
                躍動感
              </p>
              <p class="delivery-inner-textArea04-sp">
                通常サイト<br />（横にスクロールできます）
              </p>
              <div class="js-scrollable delivery-inner-scrollArea">
                <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-item03-scroll.png" alt="">
              </div>
              <a href="https://wehub.swipe-lp.io" class="delivery-inner-link" target="_blank">
                実際のサイトはこちらから
              </a>
            </div>
          </li>
        </ul>
      </section>
      <section class="delivery-banner">
        <div class="delivery-banner-inner">
          <h2 class="sub-title">SwipeLPデモ画面</h2>
          <ul>
            <li>
              <div class="delivery-banner-head">
                <h3>SAMPLE01</h3>
              </div>
              <div class="delivery-banner-body">
                <p class="delivery-banner-body-sp-title sp-only">宿泊サイト例</p>
                <div class="delivery-banner-body-inner">
                  <div class="delivery-banner-left">
                    <p class="pc-only">宿泊サイト例</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-banner-01.png" alt="">
                  </div>
                  <div class="delivery-banner-right">
                    <p class="delivery-banner-right-text01">ワクワクポイント</p>
                    <p class="delivery-banner-right-text02">実際にホテルに<br />いるような</p>
                    <p class="delivery-banner-right-text03">ライブ感</p>
                    <p class="delivery-banner-right-text04 pc-only">デモサイトはこちらから</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-banner-qr.png" class="pc-only" alt="">
                    <a href="https://demo.swipe-lp.io/?id=13" class="delivery-banner-right-button sp-only" target="_blank">
                      デモサイトを見る
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="delivery-banner-head">
                <h3>SAMPLE02</h3>
              </div>
              <div class="delivery-banner-body">
                <p class="delivery-banner-body-sp-title sp-only">美容室サイト</p>
                <div class="delivery-banner-body-inner">
                  <div class="delivery-banner-left">
                    <p class="pc-only">美容室サイト</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-banner-02.png" alt="">
                  </div>
                  <div class="delivery-banner-right">
                    <p class="delivery-banner-right-text01">ワクワクポイント</p>
                    <p class="delivery-banner-right-text02">なりたい髪型を<br />見つけたときの</p>
                    <p class="delivery-banner-right-text03">満足感</p>
                    <p class="delivery-banner-right-text04 pc-only">デモサイトはこちらから</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-banner-qr-02.png" class="pc-only" alt="">
                    <a href="https://demo.swipe-lp.io/?id=26" class="delivery-banner-right-button sp-only" target="_blank">
                      デモサイトを見る
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="delivery-banner-head">
                <h3>SAMPLE03</h3>
              </div>
              <div class="delivery-banner-body">
                <p class="delivery-banner-body-sp-title sp-only">自動車メーカーサイト</p>
                <div class="delivery-banner-body-inner">
                  <div class="delivery-banner-left">
                    <p class="pc-only">自動車メーカーサイト</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-banner-03.png" alt="">
                  </div>
                  <div class="delivery-banner-right">
                    <p class="delivery-banner-right-text01">ワクワクポイント</p>
                    <p class="delivery-banner-right-text02">店舗で<br />選んでいるかのような</p>
                    <p class="delivery-banner-right-text03">躍動感</p>
                    <p class="delivery-banner-right-text04 pc-only">デモサイトはこちらから</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/delivery/delivery-banner-qr-03.png" class="pc-only" alt="">
                    <a href="https://demo.swipe-lp.io/?id=16" class="delivery-banner-right-button sp-only" target="_blank">
                      デモサイトを見る
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="banner">
        <div class="banner-inner">
          <div class="banner-inner-left">
            <p class="banner-inner-left-text01">
              ワクワク感を提供できるSwipeLPを使えば
            </p>
            <p class="banner-inner-left-text02">
              <span>CVRの向上を実現</span>できます！
            </p>
            <a href="https://fukko.jp/contact/" class="banner-inner-left-button" target="_blank">
              お問い合わせはこちら
            </a>
          </div>
          <div class="banner-inner-right">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/banner/banner-01.png" alt="">
          </div>
        </div>
      </section>
      <section class="price">
        <ul class="price-list">
          <li>
            <h2 class="sub-title">広告セット料金プラン<br class="sp-only">
              （特別キャンペーン価格）</h2>
            <p class="price-text">リリース直後なので特別キャンペーン価格にてご提案しております！<br />4パターンのLPを作成しテスト配信を行えるサブスクリプションプランがおすすめです。</p>
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/price/price-table-02.png" class="pc-only" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/price/price-table-02-sp.png" class="sp-only" alt="">
          </li>
          <li>
            <h2 class="sub-title">SwipeLP単体料金プラン<br class="sp-only">（特別キャンペーン価格）</h2>
            <p class="price-text">リリース直後なので特別キャンペーン価格にてご提案しております！<br />4パターンのLPを作成しテスト配信を行えるサブスクリプションプランがおすすめです。</p>
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/price/price-table-01.png" class="pc-only" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/price/price-table-01-sp.png" class="sp-only" alt="">
          </li>
        </ul>
      </section>
      <section class="contact">
        <h2 class="sub-title">お気軽に<br class="sp-only">お問い合わせください</h2>
        <p class="contact-text">
          お客様ひとりひとり、ユーザーひとりひとり価値観も違えば、思考も異なります。<br />
          それをすべて理解することは非常に困難なこと。<br />
          私たちはそれに挑戦し続けることで、新しい未来があると信じております。<br />
          まずはお気軽にお話をお聞かせください。
        </p>
        <ul>
          <li>
            <a href="https://fukko.jp/contact/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/contact/contact-mail.svg" alt="">
              <p>メールでの<br />お問い合わせはこちら</p>
            </a>
          </li>
          <li>
            <a href="https://www.chatwork.com/fukko_SwipeLP" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/contact/contact-chatwork.svg" alt="">
              <p>チャットワークでの<br />お問い合わせはこちら</p>
            </a>
          </li>
          <li>
            <a href="https://page.line.me/962kdjus?oat_content=url&openQrModal=true" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/contact/contact-line.svg" alt="">
              <p>LINEでの<br />お問い合わせはこちら</p>
            </a>
          </li>
        </ul>
      </section>
      <footer class="footer">
        <div class="footer-inner">
          <div class="footer-left">
            <h3>株式会社FUKKO</h3>
            <p class="footer-left-text01">〒171-0014 東京都豊島区池袋2丁目67-1<br class="sp-only"> シティハウスノヴァ502</p>
            <p class="footer-left-text02">お電話でのお問い合わせはこちらから</p>
            <a href="tel:03-6384-0300">03-6384-0300</a>
          </div>
          <div class="footer-right">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/footer/footer-logo.png" alt="">
            <p>&copy;株式会社FUKKO Inc. All Rights Reserved.</p>
          </div>
        </div>
      </footer>
    </main>
    <sidebar class="sidebar hidden">
      <!-- <div class="sidebar-inner">
        <img src="https://fukko.jp/wp-content/themes/fukko/swipeLP/img/sidebar/sidebar-01.png" alt="">
        <div class="sidebar-demo">
          <img src="https://fukko.jp/wp-content/themes/fukko/swipeLP/img/sidebar/sidebar-mobile.png" alt="">
          <iframe src="https://demo.swipe-lp.io/?id=13"></iframe>
        </div>
        <a href="https://fukko.jp/reservation" class="pc-only" target="_blank">
          <img src="https://fukko.jp/wp-content/themes/fukko/swipeLP/img/sidebar/sidebar-mail.svg" alt="">
          無料デモ作成依頼はこちらから
        </a>
      </div> -->
      <div class="sidebar-inner pc-only">
        <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/sidebar/sidebar-01.png" alt="">
        <div class="sidebar-demo">
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/sidebar/sidebar-mobile.png" alt="">
          <iframe src="https://demo.swipe-lp.io/?id=13"></iframe>
        </div>
        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="pc-only" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/sidebar/sidebar-mail.svg" alt="">
          無料デモ作成依頼はこちらから
        </a>
      </div>
      <div class="sidebar-demo-sp sp-only">
        <iframe src="https://demo.swipe-lp.io/?id=13&wmode=transparent"></iframe>
      </div>
    </sidebar>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/swipeLP/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/swipeLP/js/chart.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/swipeLP/js/swiper.js"></script>
  <?php wp_footer(); ?>
</body>

</html>