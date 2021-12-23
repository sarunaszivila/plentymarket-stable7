<?php
namespace Plenty\Modules\Order\Injection\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Service to register injections for order creation.
 */
interface OrderInjectionServiceContract 
{

	/**
	 * Register an injection on create before the validation.
	 */
	public function registerOnCreateBeforeValidation(
		array $orderTypeIds, 
		string $class
	);

	/**
	 * Register an injection on create before the sums calculation.
	 */
	public function registerOnCreateBeforeSumsCalculation(
		array $orderTypeIds, 
		string $class
	);

	/**
	 * Register an injection on create after the sums calculation.
	 */
	public function registerOnCreateAfterSumsCalculation(
		array $orderTypeIds, 
		string $class
	);

	/**
	 * Register an injection on update before the validation.
	 */
	public function registerOnUpdateBeforeValidation(
		array $orderTypeIds, 
		string $class
	);

	/**
	 * Register an injection on update before the sums calculation.
	 */
	public function registerOnUpdateBeforeSumsCalculation(
		array $orderTypeIds, 
		string $class
	);

	/**
	 * Register an injection on update after the sums calculation.
	 */
	public function registerOnUpdateAfterSumsCalculation(
		array $orderTypeIds, 
		string $class
	);

	/**
	 * Inject the data.
	 */
	public function inject(
		string $saveType, 
		string $injectionPoint, 
		array $data, 
		Order $order = null
	):array;

}