<?php
namespace Plenty\Modules\Board\Events;


/**
 * This event will be triggered, after all tasks of a column were deleted.
 */
abstract class AfterBoardColumnTasksDeleted 
{

	abstract public function getBoardId(
	):string;

	abstract public function getColumnId(
	):string;

	abstract public function getDeletedTaskIdList(
	):array;

}