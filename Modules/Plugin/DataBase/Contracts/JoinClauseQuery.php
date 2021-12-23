<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Query\JoinClause;
use Plenty\Data\MappableModel as MappableModel;
use Plenty\Modules\Plugin\DataBase\Contracts\Model as PluginModel;
use Plenty\Modules\Plugin\DataBase\Services\DataBaseHelper;

/**
 * database join query
 */
abstract class JoinClauseQuery 
{

	abstract public function on(
		string $firstModelName, 
		 $first, 
		string $operator = null, 
		string $secondModelName = null, 
		string $second = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add a basic where clause to the query.
	 */
	abstract public function where(
		string $modelName, 
		 $column, 
		string $operator = null, 
		 $value = null, 
		string $boolean = "and"
	):self;

	/**
	 * Add an "or where" clause to the query.
	 */
	abstract public function orWhere(
		string $modelName, 
		 $column, 
		string $operator = null, 
		 $value = null
	):self;

	/**
	 * Add a "where null" clause to the query.
	 */
	abstract public function whereNull(
		string $modelName, 
		 $column, 
		string $boolean = "and", 
		bool $not = false
	):self;

	/**
	 * Add an "or where null" clause to the query.
	 */
	abstract public function orWhereNull(
		string $modelName, 
		 $column
	):self;

}