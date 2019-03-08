<?php

class RecipesCategorieViewer extends ContentElement
{
	protected $strTemplate = 'ce_recipescategorieviewer';

	public function generate()
	{
//		if (TL_MODE == 'BE')
//		{
//			$objCat = \RecipesCategorieModel::findByPK($this->recipescategorie);
//			$objTemplate = new \BackendTemplate('be_wildcard');
//			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['tl_content']['recipes_categories_legend']) . ' ###';
//			$objTemplate->title =  $objCat->title.' ['.$objCat->lang.']'.' (ID '. $objCat->id.')';
//			return $objTemplate->parse();	
//		}
		return parent::generate();
	}//end generate




	protected function compile()
	{
//		global $objPage;
//		$this->loadLanguageFile('tl_recipes');
//		$this->loadLanguageFile('tl_recipes_categories');
//
//		//get filter		
//		$current_categorie = '';
//		if (Input::get('action') == 'filter')
//		{
//		    $current_categorie = Input::get('categorie');
//		}
//
//		// modi Page title
//		if ($current_categorie <> ''){
//			$objPage->title .= ' - '.$current_categorie;
//		}
//
//		//vars
//		$objFilter;
//		$objFilter['categorie']['name'] = $GLOBALS['TL_LANG']['tl_recipes']['categorie'][0];
//
//
//		$objCategorie = \RecipesCategorie::findByPK($this->recipescategorie);
//		$query = array('column' => array('pid=?','published=?','lang=?'),'value' => array($objCategorie->id,1,$objPage->language) ,'order' => 'sorting');
//		$objRecipes = \Recipes::findAll($query);
//
//		//print_r($objRecipes);
//
////		$query = array('column' => array('lang=?','published=?'),'value' => array($objPage->language,1) ,'order' => 'title');
////		$objRecipes = \Recipes::findAll($query);
//	
//		if ($objRecipes){
//			foreach ($objRecipes as $key => $value) 
//			{
//				$cat = unserialize($value->categorie);
//
//				if ($cat){
//					foreach ($cat as $key => $val) 
//					{
//						if ($val != '')
//					 	{
//					 		$objFilter['categorie']['data'][$val] = Array('selected'=> ($current_categorie == $val ? true : false) );
//					 	}
//					}
//				}
//			}
//		}
//
//		if ($objFilter['categorie']['data'])
//		{
//			if (count($objFilter['categorie']['data']) > 0)
//			{ 
//				ksort($objFilter['categorie']['data']);
//			}
//		}
//
//		if ($current_categorie !='')
//		{
//			array_push($query['column'],'categorie LIKE ?');
//			array_push($query['value'],'%"'.$current_categorie.'"%');
//		}
//
//
//
//		$filterRecipes = \Recipes::findAll($query);
//
// 		$recipes = array();
//
//		if (count($filterRecipes) > 0){
//		 	foreach ($filterRecipes as $key => $value) {
// 					
// 				$objRecipesImage = \FilesModel::findByPk($value->image);
//
//		 		$recipes[$key] = array(
//		 			id => $value->id,
//		 			title => $value->title,
//				 	description => $value->description,
//				 	image => array
//					(
//						meta => $this->getMetaData($objRecipesImage->meta, $objPage->language),
//						path => $objRecipesImage->path,
//						name => $objRecipesImage->name,
//						extension => $objRecipesImage->extension
//					),
//				 	ingredients =>$value->ingredients,
//				 	preparation =>$value->preparation,
//				 	nutritional =>$value->nutritional,
//				 	//url => \PageModel::findById($value->url)->getFrontendUrl() 
//		 		);
//		 	}
//		}
//
//		$this->Template->recipes = $recipes;
//		$this->Template->filter = array
//		(
//			all => count($objRecipes),
//			filtered => count($filterRecipes),
//			data => $objFilter,
//
//		);
		

	}//end compile

}//end class
