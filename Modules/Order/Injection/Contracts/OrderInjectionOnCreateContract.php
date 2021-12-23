<?php
namespace Plenty\Modules\Order\Injection\Contracts;


/**
 * Contract for injections on create.
 */
interface OrderInjectionOnCreateContract 
{

	/**
	 * Manipulate the order data on create.
	 */
	public function handle(
		array $data
	):array;

}