<?php
namespace Plenty\Modules\Category\Models;


/**
 * Category
 */
abstract class Category 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const TYPE_CONTENT = 'content';

	const TYPE_ITEM = 'item';

	const TYPE_CONTAINER = 'container';

	const TYPE_BLOG = 'blog';

	const TYPE_LIST = ['blog','container','item','content'];

	const UPDATED_AT = 'plenty_category_last_update_timestamp';

	const CREATED_AT = 'createdAt';
	
public		$id;
	
public		$parentCategoryId;
	
public		$level;
	
public		$type;
	
public		$linklist;
	
public		$right;
	
public		$sitemap;
	
public		$updatedAt;
	
public		$clients;
	
public		$details;
	
public		$elmarCategories;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}