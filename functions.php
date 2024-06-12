<?php

// ファンクション
// require_once('library/admin/init.php');
// require_once('library/admin/top.php');

// require_once('library/functions/custom-post.php');
require_once('library/functions/breadcrumb.php');
require_once('library/functions/custom-fields.php');

remove_action('wp_head', 'wp_generator');
add_theme_support('post-thumbnails');
//アップロード時の自動生成を停止
update_option('medium_large_size_w', 0);
// set_post_thumbnail_size( 220, 162, true );
add_image_size('featured', 220, 162, true);
add_image_size('archivesthumb', 656, 0, true);

// ビジュアルエディタにCSSを適用する
add_editor_style('admin/editor-style.css');

// 管理画面にcssファイルを読み込む
function my_admin_style()
{
  wp_enqueue_style('my_admin_style', get_template_directory_uri() . '/css/admin/style.css');
}
add_action('admin_enqueue_scripts', 'my_admin_style');

// 管理画面にjsファイルを読み込む
function my_admin_script()
{
  wp_enqueue_script('my_admin_script', get_template_directory_uri() . '/js/admin/script.js', array('jquery'), '', true);
}
add_action('admin_enqueue_scripts', 'my_admin_script');

// ビジュアルエディタの指定できるフォーマットを変更
add_filter('tiny_mce_before_init', 'custom_tiny_mce_block_formats');
function custom_tiny_mce_block_formats($settings)
{
  $settings['block_formats'] = '段落=p;見出し1=h2;見出し2=h3;見出し3=h4;';
  return $settings;
}

//アイキャッチ設定
add_theme_support('post-thumbnails');


add_action('wp_footer', 'mycustom_wp_footer');

function mycustom_wp_footer()
{
?>
  <script type="text/javascript">
    if (jQuery('.wpcf7').length) {
      var wpcf7Elm = document.querySelector('.wpcf7');
      wpcf7Elm.addEventListener('wpcf7mailsent', function(event) {
        location.replace('/thanks');
      }, false);
    }
  </script>
<?php
}

/* OGP設定
* ---------------------------------------- */
function my_meta_ogp()
{
  if (is_front_page() || is_home() || is_singular()) {
    global $post;
    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';

    if (is_singular()) { //記事＆固定ページ
      setup_postdata($post);
      $ogp_title = $post->post_title;
      $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
      $ogp_url = get_permalink();
      wp_reset_postdata();
    } elseif (is_front_page() || is_home()) { //トップページ
      $ogp_title = get_bloginfo('name');
      $ogp_descr = get_bloginfo('description');
      $ogp_url = home_url();
    }

    //og:type
    $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

    //og:image
    if (is_singular() && has_post_thumbnail()) {
      $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
      $ogp_img = $ps_thumb[0];
    } else {
      $ogp_img = get_template_directory_uri() . '/imges/og_image_logo.png';
    }

    //出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '" />' . "\n";
    $insert .= '<meta property="og:description" content="' . esc_attr($ogp_descr) . '" />' . "\n";
    $insert .= '<meta property="og:type" content="' . $ogp_type . '" />' . "\n";
    $insert .= '<meta property="og:url" content="' . esc_url($ogp_url) . '" />' . "\n";
    $insert .= '<meta property="og:image" content="' . esc_url($ogp_img) . '" />' . "\n";
    $insert .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    // $insert .= '<meta name="twitter:site" content="@freekiraz" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    //facebookのapp_id（設定する場合）
    // $insert .= '<meta property="fb:app_id" content="ここにappIDを入力">' . "\n";
    //app_idを設定しない場合ここまで消す

    echo $insert;
  }
} //END my_meta_ogp

add_action('wp_head', 'my_meta_ogp'); //headにOGPを出力


/* ページャーの生成
* ---------------------------------------- */
if (!function_exists('pagination')) {
  function pagination($pages = '', $range = 2)
  {
    $showitems = ($range * 2) + 1; //表示するページ数（５ページを表示）

    global $paged; //現在のページ値
    if (empty($paged)) $paged = 1; //デフォルトのページ

    if ($pages == '') {
      global $wp_query;
      $pages = $wp_query->max_num_pages; //全ページ数を取得
      if (!$pages) //全ページ数が空の場合は、１とする
      {
        $pages = 1;
      }
    }

    if (1 != $pages) //全ページが１でない場合はページネーションを表示する
    {
      echo "<div class=\"pager\">\n";
      //Prev：現在のページ値が１より大きい場合は表示
      if ($paged > 1) echo "<a class=\"list\" href='" . get_pagenum_link($paged - 1) . "'><i class=\"fas fa-angle-left\"></i></a>\n";

      for ($i = 1; $i <= $pages; $i++) {
        if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
          //三項演算子での条件分岐
          echo ($paged == $i) ? "<span class=\"list list-current\">" . $i . "</span>\n" : "<a class=\"list\" href='" . get_pagenum_link($i) . "'>" . $i . "</a>\n";
        }
      }
      //Next：総ページ数より現在のページ値が小さい場合は表示
      if ($paged < $pages) echo "<a class=\"list\" href=\"" . get_pagenum_link($paged + 1) . "\"><i class=\"fas fa-angle-right\"></i></a>\n";
      echo "</div>\n";
    }
  }
}

add_action('wp_footer', 'add_origin_thanks_page');
function add_origin_thanks_page()
{
  echo <<< EOC

<script>
        var thanksPage = {
          9: 'http://fukko.jp/contact/thanks/',
          30: 'http://fukko.jp/nudgecontact/thanks/',
          205: 'https://fukko.jp/service/nudge/download/thanks/',
          271: 'https://fukko.jp/service/microsoft/download/thanks/',

        };
       document.addEventListener( 'wpcf7mailsent', function( event ) {
         location = thanksPage[event.detail.contactFormId];
       }, false );
      </script>

EOC;
}

//スタイルシート
function my_wpenqueue_styles()
{

  wp_enqueue_style('aos_css', get_template_directory_uri() . '/css/aos.css');
}


//スクリプト
function my_wpenqueue_scripts()
{


  wp_enqueue_script('aos_js', get_template_directory_uri() . '/js/aos.js', array(), false, true);

  wp_enqueue_script('point', get_template_directory_uri() . '/js/jquery.waypoints.js', array(), false, true);
  wp_enqueue_script('counter', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), false, true);
  wp_enqueue_script('particles_js', get_template_directory_uri() . '/js/particles.js', array(), false, true);
  wp_enqueue_script('my_particles_js', get_template_directory_uri() . '/js/particles_setting.js', array(), false, true);

  wp_enqueue_script('my_scripts', get_template_directory_uri() . '/js/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'my_wpenqueue_styles');
add_action('wp_enqueue_scripts', 'my_wpenqueue_scripts');

/* 固定ページをゲット */
function get_child_pages($number = 9)
{
  $parent_id = get_the_ID();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'paged' => $paged,
    'posts_per_page' => $number,
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
  );
  $child_pages = new WP_Query($args);
  return $child_pages;
}

/* テンプレート階層変更 */
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
  global $wp_query;

  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];

  if ($pagename && !$template) {
    $pagename = str_replace('/', '__', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }

  return $templates;
}


// session
// if (is_page('service/nudge/download') || is_page('service/nudge/download/confrim') || is_page('service/nudge/download/thanks')) {
//   function session_start()
//   {
//     session_start();
//   }

//   add_action('init', 'session_start');
// }


// function init_session_start()
// {
//   session_start();
// }
// add_action('init', 'init_session_start');


//お問い合わせページのみリキャプチャ
function load_recaptcha_js()
{
  if (!is_page('contact') && !is_page('download')) {
    wp_deregister_script('google-recaptcha');
  }
}
add_action('wp_enqueue_scripts', 'load_recaptcha_js', 100);
