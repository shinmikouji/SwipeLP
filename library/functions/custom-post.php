<?php

/* 先輩の声のカスタム投稿タイプ
* ---------------------------------------- */
add_action('init', 'fukko_staff_custom_post_type');
function fukko_staff_custom_post_type() {
  $labels = array(
    'name'                => '先輩の声',
    'singular_name'       => '先輩の声',
    'add_new_item'        => '新しい先輩の声を追加',
    'add_new'             => '新規追加',
    'new_item'            => '新しい先輩の声',
    'view_item'           => '先輩の声を表示',
    'not_found'           => '先輩の声はありません',
    'not_found_in_trash'  => 'ゴミ箱に先輩の声はありません。',
    'search_items'        => '先輩の声を検索',
  );
  $args = array(
    'labels'              => $labels,
    'public'              => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite' => array('slug' => 'staff', 'with_front' => false),
    'hierarchical'        => false,
    'menu_position'       => 5,
    'has_archive'         => true,
    'yarpp_support'       => true,
    'capability_type'     => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
      )
  );
  register_post_type('staff', $args);
  flush_rewrite_rules( true );

  register_taxonomy(
    'staff-cat',
    array('staff'),
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => false,
      'show_ui' => true,
      )
    );
}

/* 募集要項のカスタム投稿タイプ
* ---------------------------------------- */
add_action('init', 'fukko_recruit_custom_post_type');
function fukko_recruit_custom_post_type() {
  $labels = array(
    'name'                => '募集要項',
    'singular_name'       => '募集要項',
    'add_new_item'        => '新しい募集要項を追加',
    'add_new'             => '新規追加',
    'new_item'            => '新しい募集要項',
    'view_item'           => '募集要項を表示',
    'not_found'           => '募集要項はありません',
    'not_found_in_trash'  => 'ゴミ箱に募集要項はありません。',
    'search_items'        => '募集要項を検索',
  );
  $args = array(
    'labels'              => $labels,
    'public'              => false,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite' => array('slug' => 'recruit', 'with_front' => false),
    'hierarchical'        => false,
    'menu_position'       => 5,
    'has_archive'         => true,
    'yarpp_support'       => true,
    'capability_type'     => 'post',
    'supports' => array(
      'title'
    )
  );
  register_post_type('recruit', $args);
  flush_rewrite_rules( true );
}
