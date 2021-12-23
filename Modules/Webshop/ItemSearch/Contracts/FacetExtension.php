<?php
namespace Plenty\Modules\Webshop\ItemSearch\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;

/**
 * Interface to add custom facets.
 */
interface FacetExtension 
{

	/**
	 * Get the aggregation to apply the facet to the search results.
	 */
	public function getAggregation(
	):AggregationInterface;

	/**
	 * Merge facet data into list of facets.
	 */
	public function mergeIntoFacetsList(
		 $result
	):array;

	/**
	 * Extract search filters from filter paramters to be applied to the search request.
	 */
	public function extractFilterParams(
		 $filtersList
	);

}