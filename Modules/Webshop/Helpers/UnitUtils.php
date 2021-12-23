<?php
namespace Plenty\Modules\Webshop\Helpers;


/**
 * Convert plentymarkets unit keys into common unit codes.
 */
abstract class UnitUtils 
{

	const METER = 1;

	const DECIMETER = 2;

	const CENTIMETER = 3;

	const MILLIMETER = 4;

	/**
	 * Return common code for a unit ('m','cm' 'mm').
	 */
	abstract public static function getHTML4Unit(
		string $unit = "SMM"
	):string;

}