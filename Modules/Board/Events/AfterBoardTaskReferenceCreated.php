<?php
namespace Plenty\Modules\Board\Events;

use Plenty\Modules\Board\Models\BoardTaskReference;

/**
 * This event will be triggered, after a task reference was created.
 */
abstract class AfterBoardTaskReferenceCreated 
{

	abstract public function getBoardTaskReference(
	):BoardTaskReference;

}