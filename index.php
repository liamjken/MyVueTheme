<?php
/**
 * MyVueTheme
 *
 * @package MyVueTheme
 */

get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="app"></div>

<?php wp_footer(); ?>
</body>
</html>