<?php
global $post;
$slug = $post->post_name;
?>

<?php get_header('thanks'); ?>

<main class="main__page__conatact main__page__thanks main__page__<?php echo $slug; ?>">


  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>

      <section class="h2_ttl">
        <div class="ttl_in">
          <div class="txt_in">
            <h2 class="font01"><?php echo get_field('page__ttl'); ?></h2>
            <p class="sub_ttl"><?php echo get_field('page__sub-ttl'); ?></p>
          </div>
        </div>
      </section><!-- end h2_ttl -->

      <section class="container">
        <div class="inner">
          <?php the_content(); ?>
        </div>

      </section><!-- end content -->

      </section><!-- end container -->

  <?php endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>