<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

<main class="main__page__news">

  <section class="h2_ttl">
    <div class="ttl_in">
      <div class="txt_in">
        <h2 class="font01">NEWS</h2>
        <p class="sub_ttl">新着情報</p>
      </div>
    </div>

  </section><!-- end h2_ttl -->

  <section class="container">
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          $category = get_the_category();
          $cat_id   = $category[0]->cat_ID;
          $cat_name = $category[0]->cat_name;
          $cat_slug = $category[0]->category_nicename;
  ?>
    <div class="news__item">
        <div class="news__item-time">
            <p class="time"><?php the_time('Y.m.d'); ?></p>
            <div class="cat<?php echo ' ' . $cat_slug; ?>"><?php echo $cat_name; ?></div>
        </div>
        <div class="news__item-text">
            <?php the_title(); ?>
        </div>
    </div>
  <?php 
    endwhile;
    endif;
  ?>
</div>
  <?php
  if (function_exists('wp_pagenavi')) {
      wp_pagenavi();
  }
  ?>


  </section><!-- end container -->

</main>

<?php get_footer(); ?>