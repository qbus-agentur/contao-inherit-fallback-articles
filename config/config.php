<?php

/**
 * Contao Open Source CMS
 *
 * Inherit Fallback Articles Extension by Qbus
 *
 * @author  Alex Wuttke <alw@qbus.de>
 * @license LGPL-3.0+
 */

$GLOBALS['TL_HOOKS']['getFallbackArticles']['inherit'] = [
	\Qbus\InheritFallbackArticles\Hooks\GetFallbackArticles::class,
	'getClosestByPageAndSection'
];
