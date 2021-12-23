<?php
namespace Plenty\Modules\Item\Variation\Events;


/**
 * The event is triggered before a statics will be loaded
 */
abstract class BeforeStatisticAccess 
{

	abstract public function isAccessAllowed(
	):bool;

	abstract public function setAccessAllowed(
		bool $accessAllowed
	):BeforeStatisticAccess;

	abstract public function getStatistic(
	):string;

	abstract public function setStatistic(
		string $statistic
	):BeforeStatisticAccess;

}