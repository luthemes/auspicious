<?php
/**
 * Auspicious (archive-jetpack-portfolio.php)
 *
 * @package     Auspicious
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 * ************************************************************************************************************************
 */

?>
<?php get_header(); ?>
	<section id="main" class="site-main">
		<div class="content-area">
			<?php Benlumia007\Backdrop\MainQuery\display( 'content-jetpack-portfolio-archive' ); ?>
		</div>
	</section>
<?php get_footer(); ?>
