<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\SearchService\Filter\CategoryFilter as PimFilter;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;

/**
 * foo
 */
abstract class CategoryFilter implements TypeInterface

{

	const DEPTH_BRANCH = 'branch';

	const DEPTH_ANY = 'any';

	const KEY_BRANCH = 'branch';

	const KEY_ANY = 'any';

	abstract public function isInAtLeastOneCategory(
		array $categoryIds, 
		string $depth = self::DEPTH_ANY
	);

	abstract public static function getPathByDepth(
		string $depth
	):string;

	abstract public function isInEachCategory(
		array $categoryIds, 
		string $depth = self::DEPTH_ANY
	);

	abstract public function isInCategory(
		int $categoryId, 
		string $depth = self::DEPTH_ANY
	);

	abstract public function isInACategory(
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