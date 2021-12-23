<?php
namespace Plenty\Modules\Board\Events;

use Plenty\Modules\Board\Models\BoardTask;

/**
 * This event will be triggered, when a board task was created.
 */
abstract class AfterBoardTaskCreated 
{

	abstract public function getBoardTask(
	):BoardTask;

}