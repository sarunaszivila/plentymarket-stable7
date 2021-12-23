<?php
namespace Plenty\Modules\Item\Search\Query;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Data\Update\Handler\Traits\MultilingualTrait;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Query\MultiMatchQuery;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * foo
 */
abstract class SearchQuery implements TypeInterface

{

	abstract public function addBarcode(
		int $boost = 0
	);

	abstract public function addNumericField(
		string $field, 
		int $boost = 0
	);

	abstract public function addMultilingualField(
		string $field, 
		string $language, 
		int $boost = 0
	);

	abstract public function addField(
		string $field, 
		int $boost = 0
	);

	abstract public function toArray(
	):array;

	abstract public function setType(
		string $type
	);

	abstract public function setOperator(
		string $operator
	):MultiMatchQuery;

	abstract public function setFuzzy(
		bool $fuzzy
	):MultiMatchQuery;

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