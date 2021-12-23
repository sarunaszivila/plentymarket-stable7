<?php
namespace Plenty\Modules\Board\Events;

use Plenty\Modules\Board\Models\Board;

/**
 * This event will be triggered, before a board column will be deleted.
 */
abstract class BeforeBoardColumnDeleted 
{

	abstract public function getBoard(
	):Board;

	abstract public function getColumnId(
	):string;

}