<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the language is changed in the online store.
 */
abstract class FrontendLanguageChanged 
{

	/**
	 * Gets the language of the online store.
	 */
	abstract public function getLanguage(
	):string;

	/**
	 * Get the flag for detection by browser language.
	 */
	abstract public function isDetectedByBrowserLanguage(
	):bool;

}