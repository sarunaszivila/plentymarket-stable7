<?php
namespace Plenty\Modules\Item\Search\Helper;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\AggregationProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\FacetProcessor;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Document\DocumentSearch;
use Plenty\Modules\Facet\Facet\Contracts\FacetSearchDefinitionServiceContract;
use Plenty\Modules\Facet\Facet\Contracts\InternalFacetRepositoryContract;
use Plenty\Modules\Item\Search\Aggregations\FacetFacetTermsAggregation;
use Plenty\Modules\Item\Search\Aggregations\FacetFacetValuesTermsAggregation;
use Plenty\Modules\Item\Search\Aggregations\FacetFilterAggregation;
use Plenty\Modules\Item\Search\Aggregations\FacetTermsAggregation;
use Plenty\Modules\Item\Search\Aggregations\ItemCardinalityAggregation;
use Plenty\Modules\Item\Search\Filter\FacetFilter;
use Plenty\Modules\Item\Search\Query\SearchQuery;

/**
 * To be written
 */
abstract class SearchHelper 
{

	abstract public function getFacetSearch(
	):DocumentSearch;

	abstract public function getFacetFilter(
	):FacetFilter;

	abstract public function getSearchQuery(
		string $query
	):SearchQuery;

}