<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SwipeLPのニュースページ</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/swipeLP/img/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/swipeLP/img/favicon.ico" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/swipeLP/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <main class="main">
      <header>
        <div class="header-logo">
          <a href="<?php echo esc_url(home_url('/swipeLP/swipeLP')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/header/logo.png" alt="">
          </a>
        </div>
      </header>
      <div class="demo-button sp-only">
        デモ画面<br />を見る
      </div>
      <section class="reservation-button sp-only">
        <a href="<?php echo esc_url(home_url('/reservation')); ?>" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/sidebar/sidebar-mail.svg" alt="">
          無料デモ作成依頼はこちらから
        </a>
      </section>
      <section class="news-head">
        <h2 class="sub-title">News</h2>
      </section>
      <section class="archive-news-inner">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 15,
          'paged' => $paged,
        );
        $news_query = new WP_Query($args);
        ?>
        <?php if ($news_query->have_posts()) : ?>
          <ul class="archive-news-list">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('custom-thumb', array('class' => 'archive-news-items-image')); ?>
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri('/swipeLP/img/news-default.png"'); ?>" class="archive-news-items-image">
                  <?php endif; ?>
                  <time><?php echo get_the_date("Y.m.d"); ?></time>
                  <p><?php the_title() ?></p>
                </a>
              </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </ul>
        <?php else : ?>
          <p class="news-text-none">記事がありません</p>
        <?php endif; ?>
        <?php if ($news_query->max_num_pages > 1) : ?>
          <div class="pagination">
            <?php
            if ($news_query->max_num_pages > 1) {
              echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%/',
                'current' => max(1, $paged),
                'total' => $news_query->max_num_pages,
                'mid_size' => 1,
                'end_size' => 1,
                'prev_text' => '<img src="' . get_template_directory_uri() . '/swipeLP/img/news-page/archive-prev-arrow.svg">',
                'next_text' => '<img src="' . get_template_directory_uri() . '/swipeLP/img/news-page/archive-next-arrow.svg">',
                'before_page_number' => '',
                'after_page_number' => ''
              ));
            }
            wp_reset_postdata();
            ?>
          </div>
        <?php endif; ?>
      </section>
      <!-- <section class="news-contact">
        <h2 class="sub-title">セミナー予約は<br class="sp-only">こちらから</h2>
        <p class="news-contact-text">
          お客様ひとりひとり、ユーザーひとりひとり価値観も違えば、思考も異なります。<br />
          それをすべて理解することは非常に困難なこと。<br />
          私たちはそれに挑戦し続けることで、新しい未来があると信じております。<br />
          まずはお気軽にお話をお聞かせください。
        </p>
        <a href="" class="news-contact-button">
          セミナーを予約する
        </a>
      </section> -->
      <footer class="footer">
        <div class="footer-inner">
          <div class="footer-left">
            <h3 class="fadeUpTrigger">株式会社FUKKO</h3>
            <p class="footer-left-text01 fadeUpTrigger">〒171-0014 東京都豊島区池袋2丁目67-1<br class="sp-only"> シティハウスノヴァ502</p>
            <a class="footer-left-text02 fadeUpTrigger" href="">
              <span>株式会社FUKKOコーポレートサイトへ</span>
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/footer/footer-link.svg" alt="">
            </a>
            <p class="footer-left-text03 fadeUpTrigger">お電話でのお問い合わせはこちらから</p>
            <a class="footer-phoneNumber fadeUpTrigger" href="tel:03-6384-0300">03-6384-0300</a>
          </div>
          <div class="footer-right">
            <a href="https://fukko.jp/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/footer/footer-logo.png" class="flipLeftTrigger" alt="">
            </a>
            <p class="fadeUpTrigger">&copy;株式会社FUKKO Inc. All Rights Reserved.</p>
          </div>
        </div>
      </footer>
    </main>
    <sidebar class="sidebar hidden">
      <div class="sidebar-inner pc-only">
        <img src="<?php echo get_template_directory_uri(); ?>/swipeLP/img/sidebar/sidebar-01.png" class="sidebar-image" alt="">
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
  <script src="<?php echo get_template_directory_uri(); ?>/swipeLP/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>