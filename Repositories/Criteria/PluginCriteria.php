<?php
namespace Plenty\Repositories\Criteria;

use Illuminate\Support\Collection;
use Plenty\Modules\Plugin\DataBase\Contracts\CriteriaQuery;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract as Repository;
use Plenty\Repositories\Criteria\Exceptions\ComparatorNotAllowedException;
use Plenty\Repositories\Criteria\Exceptions\SearchTermNotSuitableForOperatorException;

/**
 * The contract for defining criteria.
 */
abstract class PluginCriteria 
{

	public function comparisons(
	):array
	{
		return null;
	}

	abstract public function apply(
		 $builder, 
		Repository $repository
	);

	public function allowedComparators(
	):array
	{
		return null;
	}

}