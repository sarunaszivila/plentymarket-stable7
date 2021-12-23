<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNestedFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNestedShouldFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for cross selling
 */
abstract class CrossSellingFilter implements TypeInterface

{

	/**
	 * get the nested path of the filter
	 */
	abstract public function getPath(
	):string;

	/**
	 * Restricts the result to have the itemId linked
	 */
	abstract public function hasItemId(
		int $itemId
	);

	/**
	 * Restricts the result to have the relation
	 */
	abstract public function hasRelation(
		string $relation
	):self;

	/**
	 * Restricts the result to have any relation
	 */
	abstract public function hasAnyRelation(
		array $relations
	):self;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}