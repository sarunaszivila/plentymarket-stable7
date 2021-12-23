<?php
namespace Plenty\Modules\Webshop\Contracts;


/**
 * Repository for webshop localization information
 */
interface LocalizationRepositoryContract 
{

	/**
	 * Get the currently used language of the webshop visitor
	 */
	public function getLanguage(
	):string;

	/**
	 * Get the current locale
	 */
	public function getLocale(
	):string;

	/**
	 * Get a ISO language code by given country code.
	 */
	public function getLanguageCode(
		string $countryCode = null
	):string;

}