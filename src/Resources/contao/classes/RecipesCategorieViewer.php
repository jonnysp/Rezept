<?php
use Contao\ContentElement;
use Contao\BackendTemplate;
use Contao\System;
use Contao\FilesModel;
use Contao\StringUtil;
use Recipes\Model\RecipesCategoriesModel;
use Recipes\Model\RecipesModel;

class RecipesCategorieViewer extends ContentElement
{
	protected $strTemplate = 'ce_recipescategorieviewer';

	public function generate()
	{

		$request = System::getContainer()->get('request_stack')->getCurrentRequest();
		if ($request && System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
		{
			$objCat = RecipesCategoriesModel::findByPK($this->recipescategorie);
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### ' . $GLOBALS['TL_LANG']['tl_content']['recipes_categories_legend'] . ' ###';
			$objTemplate->title = '['. $objCat->id.'] - '. $objCat->title;
			return $objTemplate->parse();	
		}

		return parent::generate();
	}//end generate

	protected function compile()
	{
		global $objPage;
		$this->loadLanguageFile('tl_recipes');
		$this->loadLanguageFile('tl_recipes_categories');

		$Categorie = array();
		$Recipes = array();
		$Debug = array();

		$objCategorie = RecipesCategoriesModel::findByPK($this->recipescategorie);
		$filterRecipes = RecipesModel::findAll(
			array('column' => array('pid=?','published=?'),'value' => array($this->recipescategorie,1) ,'order' => 'sorting')
		);

		//make Categorie data
		$Categorie = array(
			"id" => $objCategorie->id,
			"title" => $objCategorie->title,
			"description" => $objCategorie->description//,
		);
		$CategorieImage = FilesModel::findByPk($objCategorie->image);
		if ($CategorieImage) {
			$Categorie['image'] = array(
				"meta"      => StringUtil::deserialize($CategorieImage->meta),
				"path"      => $CategorieImage->path,
				"name"      => $CategorieImage->name,
				"extension" => $CategorieImage->extension
			);
		}else{
			$Categorie['image'] = null;
		}

		//make Recipes data
		if (count($filterRecipes) > 0){
			foreach ($filterRecipes as $key => $value) {
			
				// generate Data_array
				$Recipes[$key] = array(
					"id" => $value->id,
					"title" => $value->title,
					"description" => $value->description,
					"ingredients" => $value->ingredients,
					"preparation" => $value->preparation,
					"published" => $value->published,
					"tags" => StringUtil::deserialize($value->tags),
					"categories" => StringUtil::deserialize($value->categories)
				);

				//main Image				
				$RecipeImage = FilesModel::findByPk($value->image);
				if ($RecipeImage) {
					$Recipes[$key]['image'] = array(
						"meta"      => StringUtil::deserialize($RecipeImage->meta), 
						"path"      => $RecipeImage->path,
						"name"      => $RecipeImage->name,
						"extension" => $RecipeImage->extension
					);
				}else{
					$Recipes[$key]['image'] = null;
				}

				//additional Images
				$Images = array();
				$RecipeImages = FilesModel::findMultipleByUuids(StringUtil::deserialize($value->images));
				if ($RecipeImages){
					foreach ($RecipeImages as $Image) {
						array_push($Images, array
							(
								"meta" => StringUtil::deserialize($Image->meta), 
								"path" => $Image->path,
								"name" => $Image->name,
								"extension" => $Image->extension
							)
						);
					}
					$Recipes[$key]['images'] = $Images;	
				}else{
					$Recipes[$key]['images'] = null;	
				}
				

			}
		}


		$this->Template->RecipesCategorie = $Categorie;
		$this->Template->Recipes = $Recipes;


	}//end compile

}//end class
