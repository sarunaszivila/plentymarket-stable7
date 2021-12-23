<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;
use Plenty\Modules\Pim\SearchService\Filter\VariationLastUpdatedAtFilter;

/**
 * foo
 */
abstract class VariationLastUpdatedFilter 
{

	abstract public function getTimestamp(
	);

	abstract public function getType(
	):string;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}