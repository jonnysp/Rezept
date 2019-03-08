<?php

class RecipesViewer extends ContentElement
{
	protected $strTemplate = 'ce_recipesviewer';

	public function generate()
	{
//		$this->loadLanguageFile('tl_recipes');
//		if (TL_MODE == 'BE')
//		{
//			$this->loadLanguageFile('tl_recipes');
//			$this->loadLanguageFile('tl_recipes_categories');
//
//			$objRecipes = \RecipesModel::findByPK($this->recipes);
//			$objRecipesCategorie = \RecipesCategorieModel::findByPK($objRecipes->pid);
//			$objTemplate = new BackendTemplate('be_wildcard');
//			
//
//			if ($objRecipes->image != '')
//			{
//				$objFile = FilesModel::findByUuid($objRecipes->image);
//				if ($objFile !== null)
//				{
//					$objTemplate->wildcard = Image::getHtml(Image::get($objFile->path, 64, 64, 'center_top'), '', 'style="float:left;"') . ' ' . $label;
//				}
//			}
//
//			$objTemplate->wildcard .= '<table style="margin-left:70px;" class="tl_header_table">
//				<tr><td><span class="tl_label">'.$GLOBALS['TL_LANG']['tl_recipes_categories']['title'][0].':</span></td><td>'.$objRecipesCategorie->title. '	 - ['.$objRecipesCategorie->lang.']</td></tr>
//				<tr><td><span class="tl_label">'.$GLOBALS['TL_LANG']['tl_recipes']['title'][0].':</span></td><td>'.$objRecipes->title. ' - ['.$objRecipes->lang.']</td></tr>
//				<tr><td><span class="tl_label">'.$GLOBALS['TL_LANG']['tl_recipes']['categorie'][0].':</span></td><td> '.implode(", ",unserialize($objRecipes->categorie)).'</td></tr>
//				</table>';
//
//			return $objTemplate->parse();	
//
//		}
		return parent::generate();
	}//end generate


	protected function compile()
	{
//		global $objPage;
//		
//		$this->loadLanguageFile('tl_recipes');
//		
//		$objRecipes = \Recipes::findByPK($this->recipes);
//		$objRecipesImage = \FilesModel::findByPk($objRecipes->image);
//
//		//multiimages
//		$objRecipesImages = Array();
//		$objunsortedImages = \FilesModel::findMultipleByUuids(deserialize($objRecipes->images));
//		$objImagesSort = unserialize($objRecipes->imagessort);
//
//		//sort Images
// 		if ($objImagesSort){
// 			foreach ($objImagesSort as $key => $value) {
// 				$uuid = $value;
//				if ($objunsortedImages){
//					foreach ($objunsortedImages as $value) {
//						if ($value->uuid == $uuid) {
//							$objRecipesImages[] = $value;
//						}
//					}
//				}
// 			}
// 		}
//
//		$objCategorie = \RecipesCategorie::findByPK($objRecipes->pid);
//		$objCategorieImage =  \FilesModel::findByPk($objCategorie->image);
//
//		//fb-tags
//		$GLOBALS['TL_HEAD'][] = '<meta property="og:type" content="website" />';
//		$GLOBALS['TL_HEAD'][] = '<meta property="og:title" content="'.$objPage->rootPageTitle.' - '.$objPage->title.'" />';
//		$GLOBALS['TL_HEAD'][] = '<meta property="og:site_name" content="'.$objPage->rootPageTitle.' - '.$objPage->title.'" />';
//		$GLOBALS['TL_HEAD'][] = '<meta property="og:url" content="'.$this->Environment->uri.'" />';
// 		if ($objRecipes->description <> ''){
//		 	$GLOBALS['TL_HEAD'][] = '<meta property="og:description" content="'.strip_tags($objRecipes->description).'" />';
//		}
//		//Image
//		if ($objRecipesImage->path <> ''){
//
//		 	$GLOBALS['TL_HEAD'][] = '<meta property="og:image" content="'.$this->Environment->base.$objRecipesImage->path.'" />';
//		}
//
//		//Images
//		$images = array();
//		 if ($objRecipesImages){
//		 	foreach ($objRecipesImages as $key => $value) {
//		 		$GLOBALS['TL_HEAD'][] = '<meta property="og:image" content="'.$this->Environment->base.$value->path.'" />';
//				$images[$key] = array
//				(
//					meta => $this->getMetaData($value->meta, $objPage->language),
//					path => $value->path,
//					name => $value->name,
//					extension => $value->extension
//				);
//		 	}
//		 }
//
//
//		$this->Template->recipes =  array
//		(
//			id => $objRecipes->id,
//			title => $objRecipes->title,
//			description => $objRecipes->description,
//			image => array
//			(
//				meta => $this->getMetaData($objRecipesImage->meta, $objPage->language),
//				path => $objRecipesImage->path,
//				name => $objRecipesImage->name,
//				extension => $objRecipesImage->extension
//			),
//			images => $images,
//			ingredients =>$objRecipes->ingredients,
//			preparation =>$objRecipes->preparation,
//			//url => \PageModel::findById($objRecipes->url)->getFrontendUrl() ,
//		
//			categorie =>array
//				(
//				title =>$objCategorie->title,
//				description =>$objCategorie->description,
//				image =>$objCategorieImage,
//				//url => \PageModel::findById($objCategorie->url)->getFrontendUrl(),
//				lang => $objCategorie->lang
//				)
//	 	);

	}//end compile

}//end class
