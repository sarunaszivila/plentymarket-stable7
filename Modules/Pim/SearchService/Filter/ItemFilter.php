<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Exception;
use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for the item
 */
abstract class ItemFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the item id.
	 */
	abstract public function hasId(
		int $id
	):self;

	/**
	 * Restricts the result to have all the item ids.
	 */
	abstract public function hasIds(
		array $ids
	):self;

	/**
	 * Restricts the result to have an image.
	 */
	abstract public function hasAnImage(
	):self;

	/**
	 * Restricts the result to have the specified flag 1.
	 */
	abstract public function hasFlag1(
		int $flagId
	):self;

	/**
	 * Restricts the result to have any of the specified flags.
	 */
	abstract public function hasAnyFlag1(
		array $flags
	):self;

	/**
	 * Restricts the result to have the specified flag 2.
	 */
	abstract public function hasFlag2(
		int $flagId
	):self;

	/**
	 * Restricts the result to have any of the specified flags.
	 */
	abstract public function hasAnyFlag2(
		array $flags
	):self;

	/**
	 * Restricts the result to have the manufacturer id.
	 */
	abstract public function hasManufacturer(
		int $manufacturerId
	):self;

	/**
	 * Restricts the result to have any of the manufacturer ids.
	 */
	abstract public function hasManufacturers(
		array $manufacturerIds
	):self;

	/**
	 * Restricts the result to have an manufacturer.
	 */
	abstract public function hasAManufacturer(
	):self;

	/**
	 * Restricts the result to have the specified item type.
	 */
	abstract public function isItemType(
		string $itemType
	):self;

	abstract public function hasAnyRevenueAccount(
		array $revenueAccounts
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