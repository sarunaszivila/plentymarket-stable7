<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Plenty\Data\MappableModel as MappableModel;
use Plenty\Modules\Plugin\DataBase\Contracts\Model as PluginModel;
use Plenty\Modules\Plugin\DataBase\Services\DataBaseHelper;

/**
 * database query
 */
abstract class CriteriaQuery 
{

	/**
	 * Add a basic where clause to the query.
	 */
	abstract public function where(
		string $fieldName, 
		string $operator = null, 
		 $value = null
	):self;

	/**
	 * Add a "where in" clause to the query.
	 */
	abstract public function whereIn(
		string $fieldName, 
		array $values, 
		string $boolean = "and", 
		bool $not = false
	):self;

	/**
	 * Add an "or where in" clause to the query.
	 */
	abstract public function orWhereIn(
		string $fieldName, 
		array $values
	):self;

	/**
	 * Add an "or where" clause to the query.
	 */
	abstract public function orWhere(
		string $fieldName, 
		string $operator = null, 
		 $value = null
	):self;

	/**
	 * Add a "where null" clause to the query.
	 */
	abstract public function whereNull(
		string $fieldName, 
		string $boolean = "and", 
		bool $not = false
	):self;

	/**
	 * Add an "or where null" clause to the query.
	 */
	abstract public function orWhereNull(
		string $fieldName
	);

	/**
	 * Add a "having" clause to the query.
	 */
	abstract public function having(
		string $fieldName, 
		string $operator = null, 
		string $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add a "or having" clause to the query.
	 */
	abstract public function orHaving(
		string $fieldName, 
		string $operator = null, 
		string $value = null
	);

	abstract public function whereHas(
		string $modelName, 
		 $callback = null, 
		string $operator = ">=", 
		int $count = 1
	);

	/**
	 * Add a join clause to the query.
	 */
	abstract public function join(
		string $firstModelName, 
		 $callback, 
		string $as = ""
	);

	/**
	 * Add a left join to the query.
	 */
	abstract public function leftJoin(
		string $firstModelName, 
		 $callback
	);

}