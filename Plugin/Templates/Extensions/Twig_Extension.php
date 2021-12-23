<?php
namespace Plenty\Plugin\Templates\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Twig_Extension_GlobalsInterface;

/**
 * Twig extension
 */
abstract class Twig_Extension 
{

	abstract public function getName(
	):string;

	abstract public function getGlobals(
	);

}