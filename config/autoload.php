<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Library
	'Qbus\InheritFallbackArticles\Hooks\GetFallbackArticles' => 'system/modules/inherit_fallback_articles/library/InheritFallbackArticles/Hooks/GetFallbackArticles.php',

	// Models
	'Qbus\InheritFallbackArticles\ArticleModel'              => 'system/modules/inherit_fallback_articles/models/ArticleModel.php',
));
