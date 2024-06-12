<?php

$SECTIONCOUNT = 10;

function test_admin_menu() {
  add_menu_page( 'ページ設定', 'ページ設定', 'manage_options', 'top_setting_menu', 'top_options_page', '', 1);
  add_action( 'admin_init', 'register_fukko_setting','admin-head');
}

add_action( 'admin_menu', 'test_admin_menu' );

function register_fukko_setting() {
  global $SECTIONCOUNT;

  for($i = 0; $i < $SECTIONCOUNT; $i++){
    register_setting('fukko-initialize-group','section02_lead'."$i");
    register_setting('fukko-initialize-group','section02_text'."$i");
    register_setting('fukko-initialize-group','section02_image'."$i");
  }

  // トップページ　スライド設定
  register_setting('fukko-initialize-group','slide_image1');
  register_setting('fukko-initialize-group','slide_image2');
  register_setting('fukko-initialize-group','slide_image3');
  register_setting('fukko-initialize-group','main_lead');
  register_setting('fukko-initialize-group','main_text');

  //トップページ第1ブロックの設定
  register_setting('fukko-initialize-group','section01_lead');
  register_setting('fukko-initialize-group','section01_text');

  //トップページ第2ブロックの設定
  register_setting('fukko-initialize-group','section02_lead01');
  register_setting('fukko-initialize-group','section02_text01');
  register_setting('fukko-initialize-group','section02_image01');

  register_setting('fukko-initialize-group','section02_lead02');
  register_setting('fukko-initialize-group','section02_text02');
  register_setting('fukko-initialize-group','section02_image02');

  register_setting('fukko-initialize-group','section02_lead03');
  register_setting('fukko-initialize-group','section02_text03');
  register_setting('fukko-initialize-group','section02_image03');

  //トップページ第3ブロックの設定
  register_setting('fukko-initialize-group','section03_image');
  register_setting('fukko-initialize-group','section03_text');

  //.htaccessを更新させる必要がある
  flush_rewrite_rules( true );
}

function top_options_page() {
  ?>

  <script type="text/javascript">

    jQuery('document').ready(function(){
      jQuery('.media-upload').each(function(){
        var rel = jQuery(this).attr("rel");
        jQuery(this).click(function(){
          window.send_to_editor = function(html) {
            html = '<a>' + html + '</a>';
            imgurl = jQuery('img', html).attr('src');
            jQuery('#'+rel).val(imgurl);
            tb_remove();
          }
          formfield = jQuery('#'+rel).attr('name');
          tb_show(null, 'media-upload.php?post_id=0&type=image&TB_iframe=true');
          return false;
        });
      });
    });
  </script>

  <div class="wrap">
    <h2>ページ設定</h2>

    <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
      <?php

      settings_fields( 'fukko-initialize-group' );
      do_settings_sections( 'fukko-initialize-group' );
      global $SECTIONCOUNT;
      ?>

      <!-- トップページのスライド設定 -->
      <div class="metabox-holder">
        <div id="toppage_slide_setting" class="postbox " >
          <h3 class='hndle'><span>メインビジュアル</span></h3>
          <div class="inside">
            <div class="main">
              <p class="setting_description">ここではメインビジュアルに表示する画像の設定をします。</p>

              <h4>画像の選択</h4>
              <p class="setting_description">
                <small>ロゴを画像にします。下の「画像をアップロード」ボタンを押して任意の画像を選択してください。このテンプレートでは、300px x 60pxの画像が最も適しています。</small>
              </p>

              <p>
                <input type="text" id="slide_image1" name="slide_image1" class="regular-text" value="<?php echo get_option('slide_image1');?>" />
                <a class="media-upload" href="JavaScript:void(0);" rel="slide_image1">
                  <input class="cmb_upload_button button" type="button" value="画像をアップロードする" />
                </a>
              </p>
              <?php
              $slideItem01 = get_option('slide_image1');
              if( isset($slideItem01) && $slideItem01 !== '' ){
                ?>
                <p class="setting_description">
                  <img style="max-width:500px;" src="<?php echo get_option('slide_image1');?>" />
                </p>
                <?php
              } ?>

              <!-- <h4>スライド画像の選択</h4>
              <p>
                <input type="text" id="slide_image2" name="slide_image2" class="regular-text" value="<?php echo get_option('slide_image2');?>" />
                <a class="media-upload" href="JavaScript:void(0);" rel="slide_image2">
                  <input class="cmb_upload_button button" type="button" value="画像をアップロードする" />
                </a>
              </p>
              <?php
              $slideItem02 = get_option('slide_image2');
              if( isset($slideItem02) && $slideItem02 !== '' ){
                ?>
                <p class="setting_description">
                  <img src="<?php echo get_option('slide_image2');?>" />
                </p>
                <?php
              } ?> -->


              <!-- <h4>スライド画像の選択</h4>
              <p>
                <input type="text" id="slide_image3" name="slide_image3" class="regular-text" value="<?php echo get_option('slide_image3');?>" />
                <a class="media-upload" href="JavaScript:void(0);" rel="slide_image3">
                  <input class="cmb_upload_button button" type="button" value="画像をアップロードする" />
                </a>
              </p> -->

            </div>

            <div class="main">
              <h4>リードコピーの設定</h4>
              <p class="setting_description">
                <small>リードコピー（リードコピーに画像を使う場合、このテキストは画像のalt属性及びtitle属性として使用されます）</small>
              </p>
              <p>
                <textarea id="main_lead" name="main_lead" class="regular-text" rows="5" cols="60"><?php echo get_option('main_lead');?></textarea>
              </p>
            </div>
            <div class="main">
              <h4>テキストの設定</h4>
              <p>
                <textarea id="main_text" name="main_text" class="regular-text" rows="5" cols="60"><?php echo get_option('main_text');?></textarea>
              </p>
            </div>
          </div>
        </div>
      </div>


      <!-- トップページ第1ブロックの設定 -->
      <div class="metabox-holder">
        <div id="toppage_section01_setting" class="postbox " >
          <h3 class='hndle'><span>トップページ第1ブロックの設定</span></h3>
          <div class="inside">
            <div class="main">
              <h4>リードコピーの設定</h4>
              <p class="setting_description">
                <small>リードコピー（リードコピーに画像を使う場合、このテキストは画像のalt属性及びtitle属性として使用されます）</small>
              </p>
              <p>
                <input type="text" id="section01_lead" name="section01_lead" class="regular-text" value="<?php echo get_option('section01_lead');?>" />
              </p>
            </div>
            <div class="main">
              <h4>テキストの設定</h4>
              <p>
                <textarea id="section01_text" name="section01_text" class="regular-text" rows="5" cols="60"><?php echo get_option('section01_text');?></textarea>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- トップページ第2ブロックの設定 -->
      <div class="metabox-holder">
        <div id="toppage_section02_setting" class="postbox " >
          <h3 class='hndle'><span>トップページ第2ブロックの設定</span></h3>
          <div class="inside">

            <?php for($i = 0; $i < $SECTIONCOUNT; $i++){ ?>
              <div class="item">
                <div class="main">
                  <h3><span>Point<?php echo ($i + 1) ?>の設定</span></h3>
                  <h4>画像の選択</h4>
                  <p>
                    <input type="text" id="section02_image<?php echo "$i" ?>" name="section02_image<?php echo "$i" ?>" class="regular-text" value="<?php echo get_option('section02_image'."$i");?>" />
                    <a class="media-upload" href="JavaScript:void(0);" rel="section02_image<?php echo "$i" ?>">
                      <input class="cmb_upload_button button" type="button" value="画像をアップロードする" />
                    </a>
                  </p>
                  <p class="setting_description">
                    <small>リードコピー（リードコピーに画像を使う場合、このテキストは画像のalt属性及びtitle属性として使用されます）</small>
                  </p>
                  <?php
                  ${'slideItem'.$i} = get_option('section02_image'."$i");
                  if( isset(${'slideItem'.$i}) && ${'slideItem'.$i} !== '' ){
                    ?>
                    <p class="setting_description">
                      <img style="max-width:500px;" src="<?php echo get_option('section02_image'."$i");?>" />
                    </p>
                    <?php
                  } ?>
                </div>
                <div class="main">
                  <h4>見出しの設定</h4>
                  <p>
                    <input type="text" id="section02_lead<?php echo "$i" ?>" name="section02_lead<?php echo "$i" ?>" class="regular-text" value="<?php echo get_option('section02_lead'."$i");?>" />
                  </p>
                </div>
                <div class="main">
                  <h4>テキストの設定</h4>
                  <p>
                    <textarea id="section02_text<?php echo "$i" ?>" name="section02_text<?php echo "$i" ?>" class="regular-text" rows="5" cols="60"><?php echo get_option('section02_text'."$i");?></textarea>
                  </p>
                </div>
                <hr>
              </div>
            <?php } ?>
            <div class="more button">
              Pointを追加する
            </div>


          </div>
        </div>
      </div>

      <!-- トップページ第3ブロックの設定 -->
      <div class="metabox-holder">
        <div id="toppage_section03_setting" class="postbox " >
          <h3 class='hndle'><span>トップページ第3ブロックの設定</span></h3>
          <div class="inside">
            <div class="main">
              <h4>画像の選択</h4>
              <p>
                <input type="text" id="section03_image" name="section03_image" class="regular-text" value="<?php echo get_option('section03_image');?>" />
                <a class="media-upload" href="JavaScript:void(0);" rel="section03_image">
                  <input class="cmb_upload_button button" type="button" value="画像をアップロードする" />
                </a>
              </p>
              <?php
              $slideItem01 = get_option('section03_image');
              if( isset($slideItem01) && $slideItem01 !== '' ){
                ?>
                <p class="setting_description">
                  <img style="max-width:500px;" src="<?php echo get_option('section03_image');?>" />
                </p>
                <?php
              } ?>
            </div>
            <div class="main">
              <h4>テキストの設定</h4>
              <p>
                <textarea id="section03_text" name="section03_text" class="regular-text" rows="5" cols="60"><?php echo get_option('section03_text');?></textarea>
              </p>
            </div>
          </div>
        </div>
      </div>

      <?php submit_button(); ?>

    </form>
  </div>

  <?php
}

?>
