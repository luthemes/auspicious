<?php
/**
 * Menus.
 *
 * Register Menus
 *
 * @package   Auspicious
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://github.com/benlumia007/auspicious
 */

namespace Auspicious\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;
use function Benlumia007\Backdrop\Mix\Manifest\asset;

class Component extends MenuContract {
    public function menus() {
        return [
            'primary'   => esc_html__( 'Primary Navigation', 'auspicious' ),
            'secondary' => esc_html__( 'Secondary Navigation', 'auspicious' ),
            'social'    => esc_html__( 'Social Navigation', 'auspicious' )
        ];
    }

	public function enqueue() {
		wp_enqueue_script( 'auspicious-navigation', asset( 'assets/js/navigation.js' ), null, null, true );
		wp_localize_script( 'auspicious-navigation', 'auspiciousScreenReaderText', [
            'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'auspicious' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'auspicious' ) . '</span>',
        ] );
	}
}   