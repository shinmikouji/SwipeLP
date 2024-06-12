<?php get_header(''); ?>

<?php
global $post;
$slug = $post->post_name;
?>

<?php
if (have_posts()) :
  while (have_posts()) : the_post();
?>

    <main class="main__page__<?php echo $slug; ?> download">
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
            <!-- <h3 class="font01">DOWNLOAD</h3>
            <p class="sub_ttl">資料請求</p> -->
            <div class="wrap clearfix">
              <div class="txt_in">
                資料請求お申し込みフォームです。
                下記項目を入力してください。<br>
                ご登録いただいたメールアドレスへ情報をお送りいたします。
              </div>
            </div>



            <section class="container">
              <?php the_content(); ?>
            </section><!-- end content -->

          </section>
        </section>


    </main>
<?php
  endwhile;
endif;
?>

<script type="text/javascript">
  function check() {

    var flag = 0;


    // 設定開始（チェックする項目を設定してください）

    if (!document.form_nudge.email.value.match(/.+@.+\..+/)) {

      flag = 1;

    }

    // 設定終了


    if (flag) {

      window.alert('メールアドレスが正しくありません'); // メールアドレス以外が入力された場合は警告ダイアログを表示
      return false; // 送信を中止

    } else {

      return true; // 送信を実行

    }

  }
</script>

<script>
  function redirect() {
    setTimeout("location.href='<?php echo home_url(); ?>/service/nudge/download/thanks/'", 3000);
  }
</script>


<?php get_footer(''); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" defer></script> -->