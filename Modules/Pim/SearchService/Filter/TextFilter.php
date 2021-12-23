<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Data\Update\Handler\Traits\MultilingualTrait;
use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\WildcardStringFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for texts
 */
abstract class TextFilter implements TypeInterface

{

	const FILTER_ANY_NAME = 'hasAnyNameInLanguage';

	const FILTER_NAME_1 = 'hasName1InLanguage';

	const FILTER_NAME_2 = 'hasName2InLanguage';

	const FILTER_NAME_3 = 'hasName3InLanguage';

	/**
	 * Restricts the result to have any name.
	 */
	abstract public function hasAnyName(
	):self;

	/**
	 * Restricts the result to have specific or any name in language: Possible filter are hasAnyNameInLanguage, hasName1InLanguage, hasName2InLanguage, hasName3InLanguage.
	 */
	abstract public function hasNameInLanguage(
		string $lang = "de", 
		string $filter = self::FILTER_ANY_NAME
	):self;

	abstract public function matchAnyName(
		string $lang, 
		string $term, 
		string $precision = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::SEARCH_TYPE_EXACT
	):self;

	abstract public function matchName1(
		string $lang, 
		string $term, 
		string $precision = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::SEARCH_TYPE_EXACT
	):self;

	abstract public function matchName2(
		string $lang, 
		string $term, 
		string $precision = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::SEARCH_TYPE_EXACT
	):self;

	abstract public function matchName3(
		string $lang, 
		string $term, 
		string $precision = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::SEARCH_TYPE_EXACT
	):self;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

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