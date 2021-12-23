<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for facets
 */
abstract class FacetFilter implements TypeInterface

{

	/**
	 * Restricts the result to have any of the facetIds.
	 */
	abstract public function hasAtLeastOneFacet(
		array $facetIds
	):self;

	/**
	 * Restricts the result to have all facetIds.
	 */
	abstract public function hasEachFacet(
		array $facetIds
	):self;

	/**
	 * Restricts the result to have the facetIds.
	 */
	abstract public function hasFacet(
		int $facetIds
	):self;

	/**
	 * Restricts the result to have the facetValueId.
	 */
	abstract public function hasFacetValue(
		int $facetValueId
	):self;

	/**
	 * Restricts the result to have any of the facetValueIds.
	 */
	abstract public function hasAFacet(
	):self;

	/**
	 * Restricts the result to have any of the facetValueIds.
	 */
	abstract public function hasAtLeastOneFacetValue(
		array $valueIds
	):self;

	/**
	 * Restricts the result to have all the facetValueIds.
	 */
	abstract public function hasEachFacetValue(
		array $valueIds
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