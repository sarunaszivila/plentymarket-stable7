<?php
namespace Plenty\Modules\Board\Events;

use Plenty\Modules\Board\Models\BoardTask;

/**
 * This event will be triggered, when a single board task was deleted. It won't be triggered, if a board column was deleted.
 */
abstract class AfterBoardTaskDeleted 
{

	abstract public function getBoardTask(
	):BoardTask;

}