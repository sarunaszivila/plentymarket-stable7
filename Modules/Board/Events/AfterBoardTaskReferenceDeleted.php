<?php
namespace Plenty\Modules\Board\Events;

use Plenty\Modules\Board\Models\BoardTaskReference;

/**
 * This event will be triggered, after a task reference was deleted.
 */
abstract class AfterBoardTaskReferenceDeleted 
{

	abstract public function getBoardTaskReference(
	):BoardTaskReference;

}