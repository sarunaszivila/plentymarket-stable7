<?php
namespace Plenty\Modules\Payment\Method\Services;


/**
 * The payment method service
 */
abstract class PaymentMethodBaseService 
{

	/**
	 * Determine if the payment method is active for the frontend
	 */
	abstract public function isActive(
	):bool;

	/**
	 * Return the frontend name of the payment method according to the language
	 */
	abstract public function getName(
		string $lang = ""
	):string;

	/**
	 * Return an additional payment fee for the payment method
	 */
	abstract public function getFee(
	):float;

	/**
	 * Return the frontend icon of the payment method according to the language
	 */
	abstract public function getIcon(
		string $lang = ""
	):string;

	/**
	 * Return the frontend description of the payment method according to the language
	 */
	abstract public function getDescription(
		string $lang = ""
	):string;

	/**
	 * Return an url with additional information shown in the frontend about the payment method according to the language
	 */
	abstract public function getSourceUrl(
		string $lang = ""
	):string;

	/**
	 * Check if it is allowed to switch to this payment method after the order is placed
	 */
	abstract public function isSwitchableTo(
	):bool;

	/**
	 * Check if it is allowed to switch from this payment method after the order is placed
	 */
	abstract public function isSwitchableFrom(
	):bool;

	/**
	 * Is this payment method searchable in the backend?
	 */
	abstract public function isBackendSearchable(
	):bool;

	/**
	 * Is this payment method active in the backend to used for existing orders?
	 */
	abstract public function isBackendActive(
	):bool;

	/**
	 * Get the backend name of the payment method according to the language
	 */
	abstract public function getBackendName(
		string $lang = ""
	):string;

	/**
	 * Can this payment method handle subscriptions?
	 */
	abstract public function canHandleSubscriptions(
	):bool;

	/**
	 * Return the icon for the backend, shown in the payments ui
	 */
	abstract public function getBackendIcon(
	):string;

}