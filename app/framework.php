<?php
/**
 * Boot the framework
 *
 * @package   Auspicious
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2019-2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/auspicious
 */

/**
 * Create a new framework instance
 *x
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$auspicious = new Benlumia007\Backdrop\Framework();

/**
 * Register default providers.
 */
$auspicious->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$auspicious->provider( Benlumia007\Backdrop\Fonts\Provider::class );
$auspicious->provider( Benlumia007\Backdrop\Mix\Manifest\Provider::class );
$auspicious->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$auspicious->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$auspicious->provider( Benlumia007\Backdrop\Template\View\Provider::class );

/**
 * Register custom providers for the theme.
 */
$auspicious->provider( Auspicious\Menu\Provider::class );
// $auspicious->provider( auspicious\Sidebar\Provider::class );

/**
 * Create an action hook for child themes.
 */
do_action( 'auspicious/child/theme', $auspicious );

/**
 * Boot the Framework
 */
$auspicious->boot();