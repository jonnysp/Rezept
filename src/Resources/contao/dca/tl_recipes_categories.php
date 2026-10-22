<?php
use Contao\DC_Table;

/**
 * Table tl_recipes_categories
 */
$GLOBALS['TL_DCA']['tl_recipes_categories'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => DC_Table::class,
		'ctable'                      => array('tl_recipes'),
		'markAsCopy'                  => 'title',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('id','title'),
			'format'                  => '[%s] - %s'
		),
		
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		)

	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},title;{image_legend},image,description;'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_recipes_categories']['title'],
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
			'sql'                     => "varchar(128) NOT NULL default ''"
		),
		'image' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_recipes_categories']['image'],
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'%contao.image.valid_extensions%'),
			'sql'                     => "binary(16) NULL",
		),
		'description' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_recipes_categories']['description'],
			'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyMCE'),
			'sql'                     => "text NULL"
		)
	)
);


