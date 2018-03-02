<?php

/**
 * Contao Open Source CMS
 *
 * Inherit Fallback Articles Extension by Qbus
 *
 * @author  Alex Wuttke <alw@qbus.de>
 * @license LGPL-3.0+
 */

namespace Qbus\InheritFallbackArticles\Hooks;

use Qbus\InheritFallbackArticles\ArticleModel;

/*
 * Provide methods that get called in
 * Qbus\FallbackArticles\Hooks\GeneratePage::getFallbackArticles
 */
class GetFallbackArticles
{

	/*
	 * Find the closest page up in the page tree that has articles in the
	 * provided section and render those articles.
	 *
	 * @param TODO
	 */
	function getClosestByPageAndSection($intPageId, $strSection) {
		$objArticleCollection = ArticleModel::findPublishedInClosestAncestorByPidAndColumn($intPageId, $strSection);

		if ($objArticleCollection === null) {
			return false;
		}

		$strCompiledSection = '';
		while ($objArticleCollection->next()) {
			$strCompiledSection .= \Controller::getArticle($objArticleCollection->current(), false, false, $strSection);
		}

		return $strCompiledSection;
	}

}

