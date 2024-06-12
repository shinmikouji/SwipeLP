<?php get_header(); ?>

<main id="page__seminar" class="main__page__seminar">

  <section class="h2_ttl">
    <div class="ttl_in">
      <div class="txt_in">
        <h2 class="font01">SEMINARGUIDE</h2>
        <p class="sub_ttl">セミナー案内</p>

      </div>
    </div>
  </section><!-- end h2_ttl -->

  <section class="container">
    <section class="seminar list_item item">
      <section class="list_in">
        <h3 class="font01">SEMINARGUIDE</h3>
        <p class="sub_ttl">セミナー案内</p>
        <div class="wrap clearfix">
          <div class="txt_in">
            FUKKOで行っている各種セミナーのご案内です。
            <br>過去のセミナーのアーカイブもご覧になれます。
          </div>
        </div>
      </section>
      <section class="seminar_lists">
        <?php
        $seminar_obj = get_page_by_path('seminar');
        $post = $seminar_obj;
        setup_postdata($post);
        ?>
        <?php
        $seminar_pages = get_child_pages();
        if ($seminar_pages->have_posts()) : ?>
          <div class="seminar_list">
            <ul class="seminarList">
              <?php
              while ($seminar_pages->have_posts()) :  $seminar_pages->the_post();
              ?>
                <li class="seminarList__item">
                  <div class="pagePannel pagePannel--case pagePannel--gray">
                    <?php
                    $field = get_field_object('label');
                    $value = $field['value'];
                    $label = $field['choices'][$value];
                    ?>
                    <?php if ($label != "終了") : ?>
                      <a href="<?php the_permalink(); ?>">
                      <?php endif; ?>
                      <div class="pagePannel__imgArea">
                        <!-- <img class="pagePannel__img img_f" src="<?php echo get_template_directory_uri(); ?>/imges/seminar/seminar_20210624.png" alt=""> -->
                        <!-- <?php the_post_thumbnail(); ?> -->
                        <?php
                        $image = get_field("img");
                        ?>
                        <img class="pagePannel__img img_f" src="<?php echo esc_attr($image['sizes']['large']); ?>">
                      </div>
                      <div class="pagePannel__detail">

                        <span class="<?php echo $value; ?>"><?php echo $label; ?></span>
                        <div class="pagePannel__company">
                          <div class="pagePannel__time">
                            <span>開催日 :</span>
                            <span><?php the_field('time'); ?></span>
                          </div>
                          <p class="pagePannel__ttl"><?php the_field('ttl'); ?></p>
                          <div class="pagePannel__txt">
                            <span>対象者 :</span>
                            <span><?php the_field('target'); ?></span>
                          </div>
                        </div>
                      </div>
                      <?php if ($label != "終了") : ?>
                      </a>
                    <?php endif; ?>


                  </div>
                </li>
              <?php endwhile; ?>


            </ul>

          </div>
          <?php if (function_exists('wp_pagenavi')) :
            wp_pagenavi(array('query' => $seminar_pages));
          endif;
          ?>
        <?php
          wp_reset_postdata();
        endif;
        ?>
      </section>

    </section><!-- end list_item -->
  </section><!-- end container -->

</main>

<?php get_footer(); ?>