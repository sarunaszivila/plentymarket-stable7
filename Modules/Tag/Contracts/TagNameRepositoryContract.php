<?php
namespace Plenty\Modules\Tag\Contracts;

use Plenty\Modules\Tag\Models\TagName;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The TagNameRepositoryContract is the interface for the tag name repository. This interface allows to update, create and list tag names.
 */
interface TagNameRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $lang
	):TagName;

	public function create(
		array $data
	):TagName;

	public function findByName(
		string $name, 
		string $lang
	):array;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

}