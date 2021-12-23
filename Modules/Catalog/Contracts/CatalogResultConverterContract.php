<?php
namespace Plenty\Modules\Catalog\Contracts;

use Exception;
use Illuminate\Support\Collection;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Models\CatalogExportResult;
use Plenty\Modules\Catalog\Services\Collections\CatalogLazyCollection;
use Plenty\Modules\Catalog\Services\FileHandlers\ResourceHandler;

/**
 * Converts export results
 */
interface CatalogResultConverterContract 
{

	/**
	 * Returns the identifier for this result converter. Has to be unique in its templates scope.
	 */
	public function getKey(
	):string;

	/**
	 * Returns the readable representation for this converter
	 */
	public function getLabel(
	):string;

	/**
	 * Returns the options that can be set in the UI
	 */
	public function getOptions(
	):UIOptionsContract;

	/**
	 * Get the mime type of the resource returned by this converter
	 */
	public function getMIME(
	):string;

	/**
	 * Get the file extension of the resource returned by this converter
	 */
	public function getFileExtension(
	):string;

	/**
	 * Get the lazy collection's chunk size
	 */
	public function getChunkSize(
	):int;

	/**
	 * Get the source lazy collection
	 */
	public function getSourceCollection(
	):CatalogLazyCollection;

	/**
	 * Set settings that you need to use in your converter
	 */
	public function setSettings(
		array $settings = []
	):CatalogResultConverterContract;

	/**
	 * Convert from an array
	 */
	public function fromArray(
		array $data
	):CatalogResultConverterContract;

	/**
	 * Convert from a Collection
	 */
	public function fromCollection(
		Collection $collection
	):CatalogResultConverterContract;

	/**
	 * Convert from a CatalogLazyCollection
	 */
	public function fromCatalogLazyCollection(
		CatalogLazyCollection $catalogLazyCollection
	):CatalogResultConverterContract;

	/**
	 * Convert from a CatalogExportResult
	 */
	public function fromCatalogExportResult(
		CatalogExportResult $exportResult
	):CatalogResultConverterContract;

	/**
	 * Convert and prepare data for marketplace
	 */
	public function toMarketplace(
	);

	/**
	 * Convert and prepare resource for download
	 */
	public function toDownload(
		ResourceHandler $resourceHandler
	);

	/**
	 * Through this a single entry of a catalog result should be added
	 */
	public function addData(
		 $data
	);

	/**
	 * Converts the data that was inserted into the specific output format
	 */
	public function getConvertedResult(
	):string;

	/**
	 * Returns the type of the converted result
	 */
	public function getType(
	):string;

	public function clear(
	);

}