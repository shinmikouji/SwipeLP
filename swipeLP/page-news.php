<?php /* Template Name:news  */ ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SwipeLP</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">

    <main class="main">
      <header>
        <div class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.jpg" class="pc-only" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo-sp.png" class="sp-only" alt="">
        </div>
      </header>
      <section class="archive-news">
        <div class="archive-news-head">
          
        </div>
      </section>
    </main>
    <sidebar class="sidebar hidden">
      <div class="sidebar-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/sidebar-01.png" alt="">
        <div class="sidebar-demo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/sidebar-mobile.png" alt="">
          <iframe src="https://demo.swipe-lp.io/?id=13"></iframe>
        </div>
        <a href="<?php echo esc_url(home_url('/reservation')); ?>" class="pc-only" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar/sidebar-mail.svg" alt="">
          無料デモ作成依頼はこちらから
      </div>
      </a>
    </sidebar>
  </div>
  <?php wp_footer(); ?>
</body>

</html>