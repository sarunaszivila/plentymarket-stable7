<?php
namespace Plenty\Modules\Blog\Services;

use Plenty\Modules\Category\Contracts\CategoryRepositoryContract;

/**
 * The blog plugin service
 */
abstract class BlogPluginService 
{

	/**
	 * Get the ID of the plugin set.
	 */
	abstract public function getPluginSetIdFromConfig(
	);

	/**
	 * Get the category by URL.
	 */
	abstract public function findCategoryByUrl(
		string $level1, 
		string $level2 = null, 
		string $level3 = null, 
		string $level4 = null, 
		string $level5 = null, 
		string $level6 = null, 
		int $webstoreId = null, 
		string $lang = null
	);

}