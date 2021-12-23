<?php
namespace Plenty\Modules\Board\Events;

use Plenty\Modules\Board\Models\BoardTask;

/**
 * This event will be triggered, before a single board task was deleted. It won't be triggered, if a board column will be deleted.
 */
abstract class BeforeBoardTaskDeleted 
{

	abstract public function getBoardTask(
	):BoardTask;

}