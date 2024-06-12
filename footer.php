<section class="footer_ex">
  <div class="footer_ex_ar">
    <div class="footer_in">
      <div class="h3_ttl">
        <h3 class="font01">CONTACT</h3>
        <p class="sub_ttl">お問い合わせ</p>
      </div>
      <p class="txt">
        お客様ひとりひとり、ユーザーひとりひとり価値観も違えば、思考も異なります。<br>
        それをすべて理解することは非常に困難なこと。<br>
        私たちはそれに挑戦し続けることで、新しい未来があると信じております。<br>
        まずはお気軽にお話をお聞かせください。
      </p>
      <div class="btn_cmn"><a href="<?php echo home_url() ?>/contact">お問い合わせはこちらから</a></div>
    </div>
  </div>
</section><!-- end footer_ex -->

<footer class="footer">
  <div class="footer_info clearfix">
    <div class="logo_in">
      <p class="footer_logo"><a href="<?php echo home_url() ?>/"><span class="logo"><img src="<?php echo get_template_directory_uri(); ?>/imges/common/logo_w.png" alt=""></span><span class="name">株式会社FUKKO</span></a></p>
      <p class="address">〒171-0014 東京都豊島区池袋2丁目67-1 シティハウスノヴァ502</p>
    </div>
    <div class="address_in">
      <div class="tel_in">
        <p class="catch">お電話でのお問い合わせはこちらから</p>
        <p class="tel font01"><a onclick="gtag('config', '<?php echo $meta['gtag'] ?>', {'page_path': '/tel/', 'page_title': '電話CV'});" href="tel:0363840300">03-6384-0300</a></p>
      </div>
    </div>
  </div><!-- end footer_info -->

  <div class="sitemap_link pc_only">
    <ul class="clearfix">
      <li><a href="<?php echo home_url() ?>/company"><span>-理念・会社概要</span></a></li>
      <!--<li><a href="#"><span>-サービス</span></a></li>-->
      <li><a href="<?php echo home_url() ?>/contact"><span>-お問い合わせ</span></a></li>
      <li><a href="<?php echo home_url() ?>/privacy"><span>-プライバシーポリシー</span></a></li>
      <li class="footer_docdl"><a href="<?php echo home_url() ?>/docdownload"><span>-資料ダウンロード</span></a></li>
      <li><a href="<?php echo home_url() ?>/career" target="_blank"><span>-採用情報</span></a></li>
    </ul>
    <a href="https://line.me/R/ti/p/@962kdjus?oat_content=url"><img src="http://ranker.website.testrs.jp/new/wp-content/uploads/2023/12/line_ad_btn.png" alt="" class="line_add"></a>
  </div><!-- end sitemap_link -->

  <p class="copy">Copyright © 2021-2024 FUKKO Inc All Rights Reserved.</p>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fv.js?20240110"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/iscroll-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scrolltopcontrol.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/news.js"></script>



<?php wp_footer(); ?>

</body>

</html>