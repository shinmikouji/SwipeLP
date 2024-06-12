<?php

/* 各種メタボックス保存ルーチン
* ---------------------------------------- */
add_action('save_post', 'bzb_my_box_save');
function bzb_my_box_save($post_id) {
  global $post;
  // $my_nonce = isset($_POST['my_nonce']) ? $_POST['my_nonce'] : null;
  // if(!wp_verify_nonce($my_nonce, wp_create_nonce(__FILE__))) {
  //   return $post_id;
  // }
  if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) { return $post_id; }
   // if(!current_user_can('edit_post', $post->ID)) { return $post_id; }

  //if($_POST['post_type'] == 'post'){
    ( isset($_POST['fukko_recruit']) ) ? update_post_meta($post->ID, 'fukko_recruit', $_POST['fukko_recruit']) : "";
    //
    ( isset($_POST['fukko_recruit_list01']) ) ? update_post_meta($post->ID, 'fukko_recruit_list01', $_POST['fukko_recruit_list01']) : "";

}


/* add comment..
* ---------------------------------------- */
add_action('add_meta_boxes', 'add_fukko_recruit_button');
function add_fukko_recruit_button() {
  add_meta_box('fukko_recruit_button', '募集要項の各項目', 'fukko_recruit_button', 'recruit', 'normal', 'low');
}

function fukko_recruit_button() {
  global $post;
  wp_nonce_field(wp_create_nonce(__FILE__), 'my_nonce');
  $fukko_recruit = get_post_meta($post->ID, 'fukko_recruit', true);
  $check_cta = "";
  $select_list01 = "";
  $select_list02 = "";
  $select_list03 = "";
  $select_list04 = "";
  $select_list05 = "";

  if(is_array($fukko_recruit)){
    extract($fukko_recruit);
  }

?>
<h4>職種/仕事内容</h4>
<textarea id="fukko_recruit_list01" name="fukko_recruit[select_list01]" class="regular-text" rows="5" cols="60"><?php echo $select_list01;?></textarea>
<hr>
<h4>勤務地</h4>
<textarea id="fukko_recruit_list02" name="fukko_recruit[select_list02]" class="regular-text" rows="5" cols="60"><?php echo $select_list02;?></textarea>
<hr>
<h4>アクセス</h4>
<textarea id="fukko_recruit_list03" name="fukko_recruit[select_list03]" class="regular-text" rows="5" cols="60"><?php echo $select_list03;?></textarea>
<hr>
<h4>給与</h4>
<textarea id="fukko_recruit_list04" name="fukko_recruit[select_list04]" class="regular-text" rows="5" cols="60"><?php echo $select_list04;?></textarea>
<hr>
<h4>休日休暇</h4>
<textarea id="fukko_recruit_list05" name="fukko_recruit[select_list05]" class="regular-text" rows="5" cols="60"><?php echo $select_list05;?></textarea>
<?php
}

?>
