<?php get_header(); ?>

<?php the_content(); ?>

<?php
echo session_status();
if (session_status() == PHP_SESSION_NONE) {
    echo "無効";
} else {
    echo "有効";
}

echo session_id();
?>

<?php
echo "セッションＩＤ：", session_id();
if (!is_page('test')) {
    echo "test";
}
?>


<?php get_footer(); ?>