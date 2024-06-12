<head>
  <?php include('head-meta.php') ?>
  <?php include('head-lnk.php') ?>

  <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <?php if (is_home()) {
    $canonical_url = get_bloginfo('url') . "/";
  } else if (is_category()) {
    $canonical_url = get_category_link(get_query_var('cat'));
  } else if (is_page() || is_single()) {
    $canonical_url = get_permalink();
  }
  if ($paged >= 2 || $page >= 2) {
    $canonical_url = $canonical_url . 'page/' . max($paged, $page) . '/';
  }
  ?>

  <?php if (!(is_404())) : ?>
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
  <?php endif; ?>

  <?php include('head-script.php') ?>

  <?php wp_head(); ?>
</head>