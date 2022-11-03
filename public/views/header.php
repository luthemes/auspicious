<?php
/**
 * Auspicious (header.php)
 *
 * @package     Auspicious
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 * ************************************************************************************************************************
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php Benlumia007\Backdrop\Theme\Menu\display( 'menu', [ 'primary' ] ); ?>
<header id="header" class="site-header header-image">
	<div class="site-branding">
		<?php Benlumia007\Backdrop\Theme\Site\display_site_title(); ?>
		<?php Benlumia007\Backdrop\Theme\Site\display_site_description(); ?>
	</div>
</header>
<section id="container" class="site-container">
	<section id="content" class="site-content">
