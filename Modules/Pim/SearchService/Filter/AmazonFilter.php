<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for amazon
 */
abstract class AmazonFilter implements TypeInterface

{

	/**
	 * Restricts the result to have any of the specified flatFiles.
	 */
	abstract public function hasAnyFlatFile(
		array $flatFiles
	):self;

	/**
	 * Restricts the result to have any of the specified productTypes.
	 */
	abstract public function hasAnyProductType(
		array $productTypes
	):self;

	/**
	 * Restricts the result to have any of the specified typeIds.
	 */
	abstract public function hasAnyProductTypeId(
		array $productTypeIds
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