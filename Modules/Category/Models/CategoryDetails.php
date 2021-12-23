<?php
namespace Plenty\Modules\Category\Models;


/**
 * CategoryDetails
 */
abstract class CategoryDetails 
{

	const ITEM_LIST_VIEW_LIST_1 = 'ItemViewCategoriesList';

	const ITEM_LIST_VIEW_LIST_2 = 'ItemViewCategoriesList2';

	const ITEM_LIST_VIEW_LIST_3 = 'ItemViewCategoriesList3';

	const ITEM_LIST_VIEW_LIST_4 = 'ItemViewCategoriesList4';

	const ITEM_LIST_VIEW_LIST_5 = 'ItemViewCategoriesList5';

	const ITEM_LIST_VIEW_LIST_6 = 'ItemViewCategoriesList6';

	const ITEM_LIST_VIEW_LIST_7 = 'ItemViewCategoriesList7';

	const ITEM_LIST_VIEW_LIST_8 = 'ItemViewCategoriesList8';

	const ITEM_LIST_VIEW_LIST_9 = 'ItemViewCategoriesList9';

	const ITEM_LIST_VIEW_LIST_10 = 'ItemViewCategoriesList10';

	const SINGLE_ITEM_VIEW_1 = 'ItemViewSingleItem';

	const SINGLE_ITEM_VIEW_2 = 'ItemViewSingleItem2';

	const SINGLE_ITEM_VIEW_3 = 'ItemViewSingleItem3';

	const SINGLE_ITEM_VIEW_4 = 'ItemViewSingleItem4';

	const SINGLE_ITEM_VIEW_5 = 'ItemViewSingleItem5';

	const PAGE_VIEW_CONTENT = 'PageDesignContent';

	const PAGE_VIEW_CHECKOUT = 'PageDesignCheckout';

	const PAGE_VIEW_CUSTOM_1 = 'PageDesignCustom';

	const PAGE_VIEW_CUSTOM_2 = 'PageDesignCustom2';

	const PAGE_VIEW_CUSTOM_3 = 'PageDesignCustom3';

	const META_ROBOTS_ALL = 'ALL';

	const META_ROBOTS_INDEX = 'INDEX';

	const META_ROBOTS_NOFOLLOW = 'NOFOLLOW';

	const META_ROBOTS_NOINDEX = 'NOINDEX';

	const META_ROBOTS_NOINDEX_NOFOLLOW = 'NOINDEX_NOFOLLOW';

	const ITEM_LIST_VIEWS = ['ItemViewCategoriesList','ItemViewCategoriesList2','ItemViewCategoriesList3','ItemViewCategoriesList4','ItemViewCategoriesList5','ItemViewCategoriesList6','ItemViewCategoriesList7','ItemViewCategoriesList8','ItemViewCategoriesList9','ItemViewCategoriesList10'];

	const SINGLE_ITEM_VIEWS = ['ItemViewSingleItem','ItemViewSingleItem2','ItemViewSingleItem3','ItemViewSingleItem4','ItemViewSingleItem5'];

	const PAGE_VIEWS = ['PageDesignContent','PageDesignCheckout','PageDesignCustom','PageDesignCustom2','PageDesignCustom3'];

	const META_ROBOTS = ['ALL','INDEX','NOFOLLOW','NOINDEX','NOINDEX_NOFOLLOW'];

	const UPDATED_AT = 'plenty_category_details_last_update_timestamp';

	const CREATED_AT = 'createdAt';
	
public		$categoryId;
	
public		$plentyId;
	
public		$lang;
	
public		$name;
	
public		$description;
	
public		$description2;
	
public		$shortDescription;
	
public		$metaKeywords;
	
public		$metaDescription;
	
public		$nameUrl;
	
public		$metaTitle;
	
public		$image;
	
public		$image2;
	
public		$imagePath;
	
public		$image2Path;
	
public		$previewUrl;
	
public		$position;
	
public		$itemListView;
	
public		$singleItemView;
	
public		$pageView;
	
public		$fulltext;
	
public		$metaRobots;
	
public		$canonicalLink;
	
public		$updatedAt;
	
public		$updatedBy;
	
public		$category;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}