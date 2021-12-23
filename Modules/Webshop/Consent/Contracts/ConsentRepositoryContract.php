<?php
namespace Plenty\Modules\Webshop\Consent\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Webshop\Consent\Models\ConsentGroup;

/**
 * Repository to register consents and check for users response.
 */
interface ConsentRepositoryContract 
{

	/**
	 * Register a new group of consents.
	 */
	public function registerConsentGroup(
		string $key, 
		string $label, 
		 $options = []
	);

	/**
	 * Register a new consent.
	 */
	public function registerConsent(
		string $key, 
		string $label, 
		 $options = []
	);

	/**
	 * Get all consent groups including all consents.
	 */
	public function getConsentGroups(
	):Collection;

	/**
	 * Check if the user has already responded the consents.
	 */
	public function hasResponse(
	):bool;

	/**
	 * Set the response for a consent or a group of consents.
	 */
	public function setResponse(
		string $key, 
		bool $isConsented = false
	);

	/**
	 * Check if the user has consented.
	 */
	public function isConsented(
		string $key
	):bool;

}