<?php
namespace Plenty\Modules\Board\Events;

use Plenty\Modules\Board\Models\Board;

/**
 * This event will be triggered, before a board will be deleted.
 */
abstract class BeforeBoardDeleted 
{

	abstract public function getBoard(
	):Board;

}