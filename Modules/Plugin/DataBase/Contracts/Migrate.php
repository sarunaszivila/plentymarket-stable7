<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;

use Plenty\Modules\Plugin\Exceptions\MySQLMigrateException;

/**
 * Migrate models
 */
interface Migrate 
{

	public function createTable(
		string $modelClassName
	):bool;

	public function updateTable(
		string $modelClassName
	):bool;

	public function deleteTable(
		string $modelClassName
	):bool;

}