<?php
namespace Plenty\Modules\Item\Search\Sort;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Data\Update\Handler\Traits\MultilingualTrait;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\BaseSorting;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;

/**
 * To be written
 */
abstract class NameSorting implements SortingInterface

{

	abstract public function toArray(
	):array;

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