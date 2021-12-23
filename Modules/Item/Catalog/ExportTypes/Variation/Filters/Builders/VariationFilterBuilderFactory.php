<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders;

use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Item\ItemBelongsToAtLeastOneAmazonFlatFile;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Item\ItemHasFlagOne;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Item\ItemHasFlagTwo;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Item\ItemHasIds;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Sku\VariationHasSku;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Tag\VariationHasTags;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationBase\VariationHasAtLeastOneAvailability;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationBase\VariationIsActive;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationClient\VariationIsVisibleForAtLeastOneClient;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationMarket\VariationIsVisibleForAtLeastOneMarket;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationProperty\VariationHasAtLeastOnePropertySelection;

/**
 * This factory provides methods to retrieve all available catalog variation filter builders.
 */
abstract class VariationFilterBuilderFactory 
{

	abstract public function variationIsActive(
	):VariationIsActive;

	abstract public function variationHasSku(
	):VariationHasSku;

	abstract public function itemBelongsToAmazonFlatFile(
	):ItemBelongsToAtLeastOneAmazonFlatFile;

	abstract public function itemHasFlagOne(
	):ItemHasFlagOne;

	abstract public function itemHasFlagTwo(
	):ItemHasFlagTwo;

	abstract public function itemHasIds(
	):ItemHasIds;

	abstract public function variationHasTags(
	):VariationHasTags;

	abstract public function variationHasAtLeastOneAvailability(
	):VariationHasAtLeastOneAvailability;

	abstract public function variationIsVisibleForAtLeastOneClient(
	):VariationIsVisibleForAtLeastOneClient;

	abstract public function variationIsVisibleForAtLeastOneMarket(
	):VariationIsVisibleForAtLeastOneMarket;

	abstract public function variationHasAtLeastOnePropertySelection(
	):VariationHasAtLeastOnePropertySelection;

}