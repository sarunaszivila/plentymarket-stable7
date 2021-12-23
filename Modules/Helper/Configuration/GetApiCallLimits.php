<?php
namespace Plenty\Modules\Helper\Configuration;


/**
 * GetApiCallLimits reads the values for the API call limits from the config and returns them as an array.
 */
abstract class GetApiCallLimits 
{

	abstract public function get(
	):array;

}