<?php
namespace Plenty\Modules\Board\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Board\Models\BoardTaskReference;

/**
 * The BoardTaskReferenceRepositoryContract is the interface for the board task reference repository. This interface provides methods to create or delete references from tasks to contacts or tickets.
 */
interface BoardTaskReferenceRepositoryContract 
{

	/**
	 * Creates a new reference to a given task. A reference may either point to a contact or to a ticket.
	 */
	public function create(
		string $taskId, 
		string $referenceValue
	):BoardTaskReference;

	/**
	 * Deletes a specific reference.
	 */
	public function delete(
		string $referenceId
	):bool;

	/**
	 * Checks whether the reference key for the given reference type exists or not.
	 */
	public function checkReferenceKey(
		string $referenceType, 
		int $referenceKey
	):bool;

}