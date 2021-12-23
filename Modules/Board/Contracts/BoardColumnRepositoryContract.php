<?php
namespace Plenty\Modules\Board\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Board\Models\BoardColumn;

/**
 * The BoardColumnRepositoryContract is the interface for the board column repository. This interface provides methods to access, create, update or delete columns.
 */
interface BoardColumnRepositoryContract 
{

	/**
	 * Lists all columns assigned to a specific board.
	 */
	public function list(
		string $boardId
	):Collection;

	/**
	 * Creates a new column and assigns it to a specific board.
	 */
	public function create(
		string $boardId, 
		array $data
	):BoardColumn;

	/**
	 * Updates a specific column.
	 */
	public function update(
		string $boardId, 
		string $columnId, 
		array $data
	):BoardColumn;

	/**
	 * Copies a column and all its tasks.
	 */
	public function copy(
		string $boardId, 
		string $columnId
	):BoardColumn;

	/**
	 * Updates the position of a specified column. This will update the position of all affected columns on the same board too.
	 */
	public function updatePosition(
		string $boardId, 
		string $columnId, 
		int $newPosition
	):bool;

	/**
	 * Deletes a specific column.
	 */
	public function delete(
		string $boardId, 
		string $columnId
	):bool;

}