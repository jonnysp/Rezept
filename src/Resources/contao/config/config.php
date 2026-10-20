<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2026 Jonny Spitzner
 *
 * @license LGPL-3.0+
 */

use Recipes\Model\RecipesModel;
use Recipes\Model\RecipesCategoriesModel;

use Contao\ArrayUtil;
use Contao\System;
use Symfony\Component\HttpFoundation\Request;

$GLOBALS['TL_MODELS']['tl_recipes'] = RecipesModel::class;
$GLOBALS['TL_MODELS']['tl_recipes_categories'] = RecipesCategoriesModel::class;

ArrayUtil::arrayInsert($GLOBALS['BE_MOD']['recipes'], 100, array
	(
		'recipescategorie' => array('tables' => array('tl_recipes_categories', 'tl_recipes'))
	)
);

/**
 * Style sheet
 */
if (System::getContainer()->get('contao.routing.scope_matcher')
	->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create(''))
) 
{
	$GLOBALS['TL_CSS'][] = 'bundles/jonnysprezept/recipes.css|static';
};

/**
 * Front end modules
 */
ArrayUtil::arrayInsert($GLOBALS['TL_CTE'], 1, array
	(
		'includes' => array
		(
			'recipescategorie_viewer'    => 'RecipesCategorieViewer'
		)
	)
);



