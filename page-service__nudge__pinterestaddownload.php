<?php get_header(''); ?>

<?php
global $post;
$slug = $post->post_name;
?>

<?php
if (have_posts()) :
  while (have_posts()) : the_post();
?>

    <main class="main__page__<?php echo $slug; ?> maildownload">
      <section class="h2_ttl">
        <div class="ttl_in">
          <div class="txt_in">
            <h2 class="font01"><?php echo get_field('page__ttl'); ?></h2>
            <p class="sub_ttl"><?php echo get_field('page__sub-ttl'); ?></p>
          </div>
        </div>
      </section><!-- end h2_ttl -->

      <section class="container">
        <section class="philosophy list_item item">
          <section class="list_in">
            <h3 class="font01">DOWNLOAD</h3>
            <p class="sub_ttl">資料ダウンロード</p>
            <div class="wrap clearfix">
              <div class="txt_in">
                資料ダウンロードのお申し込みいただきありがとうございました。<br>
                資料は下記よりダウンロードいただけます。
              </div>
            </div>
            <a id="nudgedownload" class="dlbtn" href="<?php echo get_template_directory_uri(); ?>/imges/service/nudge/pinterestaddownload.pdf" download="Pinterest広告ホワイトペーパー.pdf" onclick="redirect()">ダウンロード</a>
          </section>
        </section><!-- end list_item -->


    </main>
<?php
  endwhile;
endif;
?>

<script>
  function redirect() {
    setTimeout("location.href='<?php echo home_url(); ?>/service/nudge/pinterestaddownload/thanks/'", 3000);
  }
</script>

<?php get_footer(''); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" defer></script> -->