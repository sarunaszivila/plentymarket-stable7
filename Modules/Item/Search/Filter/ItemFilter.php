<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\SearchService\Filter\ItemFilter as PimFilter;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;

/**
 * to bew written
 */
abstract class ItemFilter implements TypeInterface

{

	abstract public function hasId(
		int $id
	);

	abstract public function hasIds(
		array $ids
	);

	abstract public function hasAnImage(
	);

	abstract public function hasFlag1(
		int $flagId
	);

	abstract public function hasFlag2(
		int $flagId
	);

	abstract public function hasManufacturer(
		int $manufacturerId
	);

	abstract public function hasManufacturers(
		array $manufacturerIds
	);

	abstract public function hasAManufacturer(
	);

	abstract public function isItemType(
		string $itemType
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