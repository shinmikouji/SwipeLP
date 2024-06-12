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



            <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" name="form_nudge" onSubmit="return check()">


              <!-- <input type=hidden name='captcha_settings' value='{"keyname":"nudgedownloadform_sk","fallback":"true","orgId":"00D5h0000012CRe","ts":""}'> -->

              <input type=hidden name="oid" value="00D5h0000012CRe">
              <input type=hidden name="retURL" value="https://fukko.jp/service/nudge/download/thanks">

              <!--  <input type="hidden" name="debug" value=1>                              -->
              <!--  <input type="hidden" name="debugEmail" value="info@fukko.jp">           -->
              <div class="form">

                <div class="form_item">
                  <label for="company" class="form_headline">会社名<span class="form_tag">必須</span></label>
                  <div class="form_date">
                    <input id="company" maxlength="40" name="company" size="20" type="text" required />
                  </div>
                </div>

                <div class="form_item">
                  <label class="form_headline">部署名</label>
                  <div class="form_date">
                    <input id="00N5h000007TO5l" maxlength="255" name="00N5h000007TO5l" size="20" type="text" /><br>
                  </div>
                </div>

                <div class="form_item">
                  <label for="last_name" class="form_headline">お名前(姓)<span class="form_tag">必須</span></label>
                  <div class="form_date">
                    <input id="last_name" maxlength="80" name="last_name" size="20" type="text" required />
                  </div>
                </div>
                <div class="form_item">
                  <label for="first_name" class="form_headline">お名前(名)</label>
                  <div class="form_date">
                    <input id="first_name" maxlength="40" name="first_name" size="20" type="text" />
                  </div>
                </div>
                <div class="form_item">
                  <label for="email" class="form_headline">メールアドレス<span class="form_tag">必須</span></label>
                  <div class="form_date">
                    <input id="email" maxlength="80" name="email" size="20" type="text" 　 required />
                  </div>
                </div>
                <div class="form_item">
                  <label for="mobile" class="form_headline">電話番号</label>
                  <div class="form_date">
                    <input id="mobile" maxlength="40" name="mobile" size="20" type="text" />
                  </div>
                </div>
                <input id="00N5h000007W6pa" name="00N5h000007W6pa" type="hidden" />

                <input id="00N5h000007U9A2" name="00N5h000007U9A2" type="hidden" value="LP反響" />

                <div class="form_item">
                  <label class="form_headline">住所</label>
                  <div class="form_date">
                    <input id="00N5h000005RTL6" maxlength="255" name="00N5h000005RTL6" size="20" type="text" />
                  </div>
                </div>

                <!-- <div class="form_item form_recaptcha">
                  <div class="g-recaptcha" data-sitekey="6Lc32ZgcAAAAANlumrFZpy2ZiwS4gJSRysgegwsJ"></div>
                </div> -->


                <div class="button">
                  <input type="submit" name="submit">
                </div>
              </div>
            </form>

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