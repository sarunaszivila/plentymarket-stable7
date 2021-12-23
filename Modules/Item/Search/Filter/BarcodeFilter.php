<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchFuzzyFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNestedFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\SearchService\Filter\BarcodeFilter as PimFilter;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;

/**
 * foo
 */
abstract class BarcodeFilter implements TypeInterface

{

	abstract public function getPath(
	):string;

	abstract public function hasCode(
		 $code, 
		string $precision
	);

	abstract public function hasType(
		string $type
	);

	abstract public function hasId(
		int $id
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}