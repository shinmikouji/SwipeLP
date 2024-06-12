<?php

/* パンくず
* ---------------------------------------- */
if( !function_exists('mint_breadcrumb') ){

  function mint_breadcrumb(){

    global $post;
    // ポストタイプを取得
    $post_type = get_post_type( $post );

    $bc  = '<ol class="p-breadcrumb__list">';
    $bc .= '<li class="c-text--small"><a href="'.home_url().'">TOP</a></li>';

    if( is_home() ){
      // メインページ
      $bc .= '<li>最新記事一覧</li>';
    }elseif( is_search() ){
      // 検索結果ページ
      $bc .= '<li>「'.get_search_query().'」の検索結果</li>';
    }elseif( is_404() ){
      // 404ページ
      $bc .= '<li>ページが見つかりませんでした</li>';
    }elseif( is_date() ){
      // 日付別一覧ページ
      $bc .= '<li>';
      if( is_day() ){
        $bc .= get_query_var( 'year' ).'年 ';
        $bc .= get_query_var( 'monthnum' ).'月 ';
        $bc .= get_query_var( 'day' ).'日';
      }elseif( is_month() ){
        $bc .= get_query_var( 'year' ).'年 ';
        $bc .= get_query_var( 'monthnum' ).'月 ';
      }elseif( is_year() ){
        $bc .= get_query_var( 'year' ).'年 ';
      }
      $bc .= '</li>';
    }elseif( is_post_type_archive( 'job' ) ){
      // カスタムポストアーカイブ
      $bc .= '<li class="c-text--small"><a href="'.home_url().'/recruit/">Recruit</a></li>';
      $bc .= '<li class="c-text--small"><a href="'.home_url().'/recruit/corporate">Mint&lsquo;z Planning採用</a></li>';
      $bc .= '<li>'.post_type_archive_title('', false).'</li>';
    }elseif( is_post_type_archive() ){
      // カスタムポストアーカイブ
      $bc .= '<li>'.post_type_archive_title('', false).'</li>';
    }elseif( is_category() ){
      // カテゴリーページ
      $cat = get_queried_object();
      if( $cat -> parent != 0 ){
        $ancs = array_reverse(get_ancestors( $cat->cat_ID, 'category' ));
        foreach( $ancs as $anc ){
          $bc .= '<li class="c-text--small"><a href="'.get_category_link($anc).'">'.get_cat_name($anc).'</a></li>';
        }
      }
      $bc .= '<li class="c-text--small">'.$cat->cat_name.'</li>';
    }elseif( is_tag() ){
      // タグページ
      $bc .= '<li class="c-text--small">'.single_tag_title("",false).'</li>';
    }elseif( is_tax('works-tag')){
      // タグページ
      $bc .= '<li class="c-text--small">'.single_tag_title("",false).'</li>';
    }elseif( is_author() ){
      // 著者ページ
      $bc .= '<li class="c-text--small">'.get_the_author_meta('display_name').'</li>';
    }elseif( is_attachment() ){
      // 添付ファイルページ
      if( $post->post_parent != 0 ){
        $bc .= '<li class="c-text--small"><a href="'.get_permalink( $post->post_parent ).'">'.get_the_title( $post->post_parent ).'</a></li>';
      }
      $bc .= '<li class="c-text--small">'.$post->post_title.'</li>';
    }elseif( is_singular('post') ){
      $cats = get_the_category( $post->ID );
      $cat = $cats[0];

      if( $cat->parent != 0 ){
        $ancs = array_reverse(get_ancestors( $cat->cat_ID, 'category' ));
        foreach( $ancs as $anc ){
          $bc .= '<li class="c-text--small"><a href="'.get_category_link( $anc ).'">'.get_cat_name($anc).'</a></li>';
        }
      }
      $bc .= '<li class="c-text--small"><a href="'.get_category_link( $cat->cat_ID ).'">'.$cat->cat_name.'</a></li>';
      $bc .= '<li class="c-text--small">'.$post->post_title.'</li>';
    }elseif( is_singular('page') ){
      // 固定ページ
      if( $post->post_parent != 0 ){
        $ancs = array_reverse( $post->ancestors );
        foreach( $ancs as $anc ){
          $bc .= '<li class="c-text--small"><a href="'.get_permalink( $anc ).'">'.get_the_title($anc).'</a></li>';
        }
      }
      $bc .= '<li class="c-text--small">'.$post->post_title.'</li>';
    }elseif( is_singular( $post_type ) ){
      // カスタムポスト記事ページ
      $obj = get_post_type_object($post_type);

      if( $obj->has_archive == true ){
        $bc .= '<li class="c-text--small"><a href="'.get_post_type_archive_link($post_type).'">'.get_post_type_object( $post_type )->label.'</a></li>';
      }
      $bc .= '<li class="c-text--small">'.$post->post_title.'</li>';
    }else{
      // その他のページ
      $bc .= '<li class="c-text--small">'.$post->post_title.'</li>';
    }

    $bc .= '</ol>';

    echo $bc;

  }
}
