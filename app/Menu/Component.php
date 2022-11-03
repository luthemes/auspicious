<?php

namespace Auspicious\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;
use function Benlumia007\Backdrop\Mix\Manifest\asset;

class Component extends MenuContract {
    public function menus() {
        return array(
            'primary'   => esc_html__( 'Primary Navigation', 'auspicious' ),
            'secondary' => esc_html__( 'Secondary Navigation', 'auspicious' ),
            'social'    => esc_html__( 'Social Navigation', 'auspicious' )
        );
    }

	public function enqueue() {
		wp_enqueue_script( 'auspicious-navigation', asset( 'assets/js/navigation.js' ), null, null, true );
		wp_localize_script( 'auspicious-navigation', 'auspiciousScreenReaderText', array(
			'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'auspicious' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'auspicious' ) . '</span>',
		) );
	}
}   