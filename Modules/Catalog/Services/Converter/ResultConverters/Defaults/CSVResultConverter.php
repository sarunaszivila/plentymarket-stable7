<?php
namespace Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Plenty\Modules\Catalog\Contracts\CatalogResultConverterContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Models\CatalogExportResult;
use Plenty\Modules\Catalog\Services\Collections\CatalogLazyCollection;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\BaseResultConverter;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options\DelimiterOption;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options\EnclosureOption;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options\HeaderRowOption;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options\LineBreakOption;
use Plenty\Modules\Catalog\Services\FileHandlers\ResourceHandler;
use Plenty\Modules\Catalog\Services\UI\Options\UIOptions;

/**
 * Default CSV Result converter
 */
abstract class CSVResultConverter extends \Plenty\Modules\Catalog\Services\Converter\ResultConverters\BaseResultConverter 

{

	const CHUNK_SIZE = 50;

	const MIME_TYPE = 'text/csv';

	const FILE_EXTENSION = 'csv';

	const OPTIONS_PATH = 'converter.csv';

	abstract public function getKey(
	):string;

	abstract public function getLabel(
	):string;

	abstract public function getOptions(
	):UIOptionsContract;

	/**
	 * Convert and prepare resource for download
	 */
	abstract public function toDownload(
		ResourceHandler $resourceHandler
	);

	/**
	 * Convert and prepare data for marketplace
	 */
	abstract public function toMarketplace(
	);

	/**
	 * Convert from an array
	 */
	abstract public function fromArray(
		array $data
	):CatalogResultConverterContract;

	/**
	 * Convert from a Collection
	 */
	abstract public function fromCollection(
		Collection $collection
	):CatalogResultConverterContract;

	/**
	 * Convert from a CatalogLazyCollection
	 */
	abstract public function fromCatalogLazyCollection(
		CatalogLazyCollection $catalogLazyCollection
	):CatalogResultConverterContract;

	/**
	 * Convert from a CatalogExportResult
	 */
	abstract public function fromCatalogExportResult(
		CatalogExportResult $exportResult
	):CatalogResultConverterContract;

	/**
	 * Get the lazy collection's chunk size
	 */
	abstract public function getChunkSize(
	):int;

	/**
	 * Get the mime type of the resource returned by this converter
	 */
	abstract public function getMIME(
	):string;

	/**
	 * Get the file extension of the resource returned by this converter
	 */
	abstract public function getFileExtension(
	):string;

	/**
	 * Get the source lazy collection
	 */
	abstract public function getSourceCollection(
	):CatalogLazyCollection;

	/**
	 * Set settings that you need to use in your converter
	 */
	abstract public function setSettings(
		array $settings = []
	):CatalogResultConverterContract;

	/**
	 * Through this a single entry of a catalog result should be added
	 */
	abstract public function addData(
		 $data
	);

	/**
	 * Converts the data that was inserted into the specific output format
	 */
	abstract public function getConvertedResult(
	):string;

	/**
	 * Removes all the data that was previously added to this instance
	 */
	abstract public function clear(
	);

	/**
	 * Returns the type of the converted result
	 */
	abstract public function getType(
	):string;

}