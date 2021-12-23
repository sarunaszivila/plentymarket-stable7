<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Legacy\Services\Item\Variation\DetectSalesPriceService;
use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\RangeStatement;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\RangeFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;
use Plenty\Modules\Pim\SearchService\Filter\PriceFilter as PimFilter;

/**
 * foo
 */
abstract class PriceFilter implements TypeInterface

{

	abstract public function between(
		float $min = null, 
		float $max = null
	);

	abstract public function betweenByClient(
		float $min = null, 
		float $max = null, 
		int $clientId = null
	);

	/**
	 * DIRTY CHEAT FOR OLD IO TESTS
	 */
	abstract public function toArray(
	):array;

	abstract public function getType(
	):string;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}