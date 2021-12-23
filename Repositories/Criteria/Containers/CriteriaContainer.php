<?php
namespace Plenty\Repositories\Criteria\Containers;

use Plenty\Repositories\Criteria\Contracts\ExtendsCriteriaContract;
use Plenty\Repositories\Criteria\Exceptions\InvalidCriteriaException;
use Plenty\Repositories\Criteria\Exceptions\RepositoryCriteriaNotExtendableException;

/**
 * Register repository criteria
 */
abstract class CriteriaContainer 
{

	/**
	 * Use this method to add criteria to a existing repository.
	 */
	abstract public function add(
		string $repository, 
		string $criteria, 
		string $key
	):self;

}