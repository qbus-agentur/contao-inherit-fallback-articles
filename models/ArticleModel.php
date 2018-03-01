<?php

/**
 * Contao Open Source CMS
 *
 * Inherit Fallback Articles Extension by Qbus
 *
 * @author  Alex Wuttke <alw@qbus.de>
 * @license LGPL-3.0+
 */

namespace Qbus\InheritFallbackArticles;

class ArticleModel extends \ArticleModel
{

	/*
	 * TODO
	 */
	public static function findPublishedInClosestAncestorByPidAndColumn($intPid, $strColumn) {
		if (!is_numeric($intPid)) {
			return null;
		}

		$intPage = \PageModel::findByPk($intPid)->pid;

		while ($intPage != 0) {
			$objCollection = static::findPublishedByPidAndColumn($intPage, $strColumn);

			if ($objCollection !== null) {
				return $objCollection;
			}

			$intPage = \PageModel::findByPk($intPage)->pid;
		}

		return null;
	}

	/*
	 * TODO
	 */
	public static function findPublishedInClosestAncestorById($intBaseId) {
		$objArticle = static::findByPk($intBaseId);
		$objBasePage = \PageModel::findByPk($objArticle->pid);
		$strSectionName = $objArticle->inColumn;

		return static::findPublishedInClosestAncestorByPidAndColumn($objBasePage->id, $strSectionName);
	}

}
