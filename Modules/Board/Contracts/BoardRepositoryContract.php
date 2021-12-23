<?php
namespace Plenty\Modules\Board\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Board\Models\Board;

/**
 * The BoardRepositoryContract is the interface for the board repository. This interface provides all methods to access, create, update or delete boards.
 */
interface BoardRepositoryContract 
{

	/**
	 * Lists all boards.
	 */
	public function list(
		array $columns = []
	):Collection;

	/**
	 * Returns a single board.
	 */
	public function get(
		string $boardId, 
		int $tasksPerPage = 20
	):Board;

	/**
	 * Creates a new board.
	 */
	public function create(
		array $data
	):Board;

	/**
	 * Updates a board.
	 */
	public function update(
		string $boardId, 
		array $data
	):Board;

	/**
	 * Copies a board and all its columns.
	 */
	public function copy(
		string $boardId
	):Board;

	/**
	 * Updates the tasks count value.
	 */
	public function updateTasksCount(
		string $boardId
	):bool;

	/**
	 * Deletes a board. Returns `true` if the deletion was successful.
	 */
	public function delete(
		string $boardId
	):bool;

}