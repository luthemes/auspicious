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
use Benlumia007\Backdrop\Support\ServiceProvider;
use Auspicious\Menu\Component;

/**
 * Attr provider class.
 *
 * @since  5.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'auspicious/menu', Component::class );
    }
    
    public function boot() {
        $this->app->resolve( 'auspicious/menu' )->boot();
    }
}