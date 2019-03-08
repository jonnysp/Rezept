<?php



$GLOBALS['TL_DCA']['tl_content']['palettes']['recipescategorie_viewer'] = '{type_legend},type;{recipes_categories_legend},recipescategorie;{protected_legend:hide},protected;{expert_legend:hide},cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['fields']['recipescategorie'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['recipescategorie'],
	'inputType'               => 'select',
//	'options_callback'        => array('DataContainer', 'getRecipesCategorie'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true),
//	'wizard' => array
//	(
//				array('DataContainer', 'editRecipesCategorie')
//	),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"

);



$GLOBALS['TL_DCA']['tl_content']['palettes']['recipes_viewer'] = '{type_legend},type;{recipes_legend},recipes;{protected_legend:hide},protected;{expert_legend:hide},cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['fields']['recipes'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['recipes'],
	'inputType'               => 'select',
//	'options_callback'        => array('DataContainer', 'getRecipes'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true),
//	'wizard' => array
//	(
//				array('DataContainer', 'editRecipes')
//	),	
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);


