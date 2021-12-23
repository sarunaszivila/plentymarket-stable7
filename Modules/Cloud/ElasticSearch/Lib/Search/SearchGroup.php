<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * To be written...
 */
abstract class SearchGroup 
{

	abstract public function addSearch(
		SearchInterface $search
	);

	abstract public function addFilter(
		TypeInterface $filter
	);

	abstract public function addQuery(
		TypeInterface $query
	);

}