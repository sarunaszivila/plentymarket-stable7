<?php
namespace Plenty\Modules\Pim\SearchService\Query;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Item\Search\Contracts\VariationElasticSearchSettingsRepositoryContract;

/**
 * Used to search for variations by a specified term.
 */
abstract class ManagedSearchQuery implements TypeInterface

{

	/**
	 * Sets the language to search in.
	 */
	abstract public function setLang(
		string $lang
	);

	/**
	 * Returns the search query as array.
	 */
	abstract public function toArray(
	):array;

	/**
	 * Set the operator for the terms in the search query. Possible values: or, and
	 */
	abstract public function setOperator(
		string $operator
	);

	/**
	 * Set whether this is a fuzzy search or not.
	 */
	abstract public function setFuzzy(
		string $fuzzy
	);

	/**
	 * Add a filter field to search in.
	 */
	abstract public function addFilterField(
		string $field, 
		int $boost = 0
	);

	/**
	 * Add a multilingual field to search in.
	 */
	abstract public function addMultilingualField(
		string $field, 
		string $language, 
		int $boost = 0
	);

	/**
	 * Add a other analyzed field to search in.
	 */
	abstract public function addOtherAnalyzedField(
		string $field, 
		int $boost = 0
	);

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