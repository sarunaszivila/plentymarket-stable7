<?php
namespace Plenty\Modules\Catalog\Helpers;


/**
 * Provides a list of valid content types that can be returned in a CatalogResultConverter
 */
abstract class ContentTypeHelper 
{

	const JSON = 'application/json';

	const CSV = 'text/csv';

	const TXT = 'text/plain';

	const XML = 'text/xml';

	const XLS = 'application/vnd.ms-excel';

	const XLSX = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';

	/**
	 * Checks wether a given type is valid as return type in a CatalogResultConverter
	 */
	abstract public static function isValidType(
		string $type
	):bool;

}