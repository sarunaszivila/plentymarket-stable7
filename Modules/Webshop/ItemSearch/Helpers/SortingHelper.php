<?php
namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Data\Update\Handler\Traits\MultilingualTrait;
use Plenty\Modules\Webshop\Contracts\LocalizationRepositoryContract;
use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\Template\Contracts\TemplateConfigRepositoryContract;
use Plenty\Modules\Webshop\WebshopServiceProvider;

/**
 * Helper class to convert sorting configuration values into internal sorting paramters used by variation data interface.
 */
abstract class SortingHelper 
{

	const SORTING_MAP = ['filter.itemId','analyzed.multilingual.{{lang}}.name1.sorting','analyzed.multilingual.{{lang}}.name2.sorting','analyzed.multilingual.{{lang}}.name3.sorting','filter.timestamps.createdAt','filter.timestamps.updatedAt','variationId','analyzed.number.sorting','filter.availabilityAverageDays','filter.position','analyzed.externalManufacturer.sorting','filter.manufacturerPosition','filter.stock.net','filter.prices.price','item.random','filter.feedback'];

	const OUTTA_TO_INNER_SORT = ['filter.prices.price_asc','filter.prices.price_desc','filter.position_asc','filter.position_desc','filter.availabilityAverageDays_desc','filter.availabilityAverageDays_desc','analyzed.number.sorting_asc','analyzed.number.sorting_desc'];

	/**
	 * Get sorting values from plugin configuration
	 */
	abstract public function getSorting(
		string $sortingConfig = null, 
		bool $isCategory = true
	):array;

	/**
	 * Get sorting values for categories from config
	 */
	abstract public function getCategorySorting(
		string $sortingConfig = null
	):array;

	/**
	 * Get sorting values for searches from config
	 */
	abstract public function getSearchSorting(
		string $sortingConfig = null
	):array;

	/**
	 * Get the result field for the name to be displayed in the webshop.
	 */
	abstract public function getUsedItemName(
	):string;

	/**
	 * Explode configuration entries containing the field to sort by and the sorting order joined by an '_'.
	 */
	abstract public function splitPathAndOrder(
		string $sorting
	):array;

	/**
	 * Map (outer) sorting from item list to (inner) sorting to be applied on grouped variations of one item.
	 */
	abstract public function mapToInnerSorting(
		string $sorting
	):string;

	abstract public static function isLanguageSupported(
		string $lang
	):bool;

	abstract public static function isLanguageActivated(
		string $lang
	):bool;

	abstract public static function getM10lByLanguage(
		string $lang, 
		string $fallback = "en"
	):string;

	abstract public static function getLanguageByM10l(
		string $lang, 
		string $fallback = "english"
	):string;

}