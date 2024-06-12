<?php
/*
Template Name: ブログ一覧
*/
?>
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

  <div class="blog_in">
    <?php
    $paged = (int) get_query_var('paged');
    $args = array(
      'paged' => $paged,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'post_type' => 'post',
      'post_status' => 'publish'
    );
    $the_query = new WP_Query($args);
    if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>

        <?php
        // カテゴリー情報を取得
        $cats = get_the_category();
        $cat = $cats[0];
        if (has_post_thumbnail() )	{
          //アイキャッチ IDを取得して画像の「URL,横幅,高さ」を取得。
          //画像サイズは medium で出力しています。
          $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
        }
        ?>

        <div class="cnt">
          <a href="<?php the_permalink();?>">
            <?php if( get_the_post_thumbnail() ) : ?>
              <div class="image" style="background-image: url('<?php echo $image_url[0]; ?>')"></div>
            <?php else: ?>
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

      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <div class="col-md-4"><?php _e( '記事が見つかりません' ); ?></div>
    <?php endif; ?>
  </div>

</section><!-- end container -->

<div class="pager">
  <?php if ($the_query->max_num_pages > 1) {
    echo paginate_links(array(
      'base' => get_pagenum_link(1) . '%_%',
      'format' => 'page/%#%/',
      'current' => max(1, $paged),
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;',
      'total' => $the_query->max_num_pages
    ));
  }
  wp_reset_postdata();
  ?>
</div>

</main>

<?php get_footer(); ?>