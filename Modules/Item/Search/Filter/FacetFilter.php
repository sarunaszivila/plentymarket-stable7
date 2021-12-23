<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\SearchService\Filter\FacetFilter as PimFilter;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;

/**
 * foo
 */
abstract class FacetFilter implements TypeInterface

{

	abstract public function hasAtLeastOneFacet(
		array $facetIds
	);

	abstract public function hasEachFacet(
		array $facetIds
	);

	abstract public function hasFacet(
		int $facetIds
	);

	abstract public function hasAFacet(
	);

	abstract public function hasAtLeastOneFacetValue(
		int $facetId, 
		array $valueIds
	);

	abstract public function hasEachFacetValue(
		int $facetId, 
		array $valueIds
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