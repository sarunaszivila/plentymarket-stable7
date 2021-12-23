<?php
namespace Plenty\Modules\Frontend\Factories;

use Plenty\Modules\Frontend\Services\AccountService;
use Plenty\Modules\Frontend\Services\AgentService;
use Plenty\Modules\Frontend\Services\FileService;
use Plenty\Modules\Frontend\Services\LocaleService;
use Plenty\Modules\Frontend\Services\SystemService;

/**
 * Factory to get information regarding the frontend
 */
abstract class FrontendFactory 
{

	/**
	 * Get the locale service.
	 */
	abstract public function getLocale(
	):LocaleService;

	/**
	 * Get the agent service.
	 */
	abstract public function getAgent(
	):AgentService;

	/**
	 * Get the system service.
	 */
	abstract public function getSystem(
	):SystemService;

	/**
	 * Get the account service.
	 */
	abstract public function getAccount(
	):AccountService;

	/**
	 * Get the file service.
	 */
	abstract public function getFile(
	):FileService;

}