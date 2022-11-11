<?php
/**
 * Default index template
 *
 * @package   Auspicious
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2019-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/auspicious
 */
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
	<section id="content" class="site-content">
		<div id="layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'no-sidebar' ) ); ?>">
			<main id="main" class="content-area">
				<?php
					if ( have_posts() ) : ?>
						<div class="search-header">
							<?php printf(
								'<h1 class="entry-title">%1$s %2$s</h1>',
								esc_html__( 'Search for: ', 'amicable' ),
								'<span class="search-result">' . get_search_query() . '</span>'
							); ?>
						</div>
						<div class="loop">
							<?php while ( have_posts() ) : the_post();
									$engine->display( 'content/search'  );
							endwhile; ?>
						</div>
						<?php the_posts_pagination();
					else :
							$engine->display( 'content/none' );
					endif;
				?>
			</main>
			<?php Benlumia007\Backdrop\Theme\Sidebar\display( 'sidebar', [ 'primary' ] ); ?>
		</div>
	</section>
<?php $engine->display( 'footer' ); ?>