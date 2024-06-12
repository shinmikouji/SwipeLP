<?php get_header(); ?>
<main class="main__page__blog">

  <section class="h2_ttl">
    <div class="ttl_in">
      <div class="txt_in">
        <h2 class="font01">BLOG</h2>
      </div>
    </div>
  </section><!-- end h2_ttl -->

  <section class="container">

    <div class="blog_entry">

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>

        <?php
        // カテゴリー情報を取得
        $cats = get_the_category();
        $cat = $cats[0];
        ?>

        <div class="image">
          <?php if( get_the_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('gallery_thumbnail'); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/imges/og_image_logo.png">
          <?php endif; ?>
        </div>

        <h2 class="title"><?php the_title();?></h2>

        <div class="info">
          <div class="cat"><?php echo $cat->name; ?></div>
          <div class="date"><?php the_time('Y.m.d') ?></div>
        </div>

        <div class="entry">
          <?php the_content(); ?>
        </div>

        <?php

      endwhile;
      else :
        ?>

        <p>投稿が見つかりません。</p>

        <?php
      endif;
      ?>

    </div>

  </section><!-- end container -->


</main>

<?php get_footer(); ?>