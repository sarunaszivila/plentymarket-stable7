<?php
namespace Plenty\Modules\Catalog\Services\Converter\ResultConverters;

use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Plenty\Modules\Catalog\Contracts\CatalogResultConverterContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Models\CatalogExportResult;
use Plenty\Modules\Catalog\Services\Collections\CatalogLazyCollection;
use Plenty\Modules\Catalog\Services\FileHandlers\ResourceHandler;
use Plenty\Modules\Catalog\Services\UI\Options\UIOptions;

/**
 * Base Result converter
 */
abstract class BaseResultConverter implements \Plenty\Modules\Catalog\Contracts\CatalogResultConverterContract

{

	const CHUNK_SIZE = 50;

	const MIME_TYPE = 'text/plain';

	const FILE_EXTENSION = 'txt';

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
	 * Get the options
	 */
	abstract public function getOptions(
	):UIOptionsContract;

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

	/**
	 * Returns the identifier for this result converter. Has to be unique in its templates scope.
	 */
	abstract public function getKey(
	):string;

	/**
	 * Returns the readable representation for this converter
	 */
	abstract public function getLabel(
	):string;

}