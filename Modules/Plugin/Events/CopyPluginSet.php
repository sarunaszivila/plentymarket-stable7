<?php
namespace Plenty\Modules\Plugin\Events;


/**
 * Event after copy pluginSet has finished
 */
abstract class CopyPluginSet 
{

	abstract public function getSourcePluginSetId(
	):int;

	abstract public function getTargetPluginSetId(
	):int;

}