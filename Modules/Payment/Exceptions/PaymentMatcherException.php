<?php
namespace Plenty\Modules\Payment\Exceptions;

use Exception;

/**
 * Class PaymentMatcherException
 */
abstract class PaymentMatcherException extends \Exception 

{

	/**
	 * Could not assign the payment to any order.
	 */
	const COULD_NOT_ASSIGN_PAYMENT = 1;

	/**
	 * Could not find a matching order.
	 */
	const COULD_NOT_FIND_MATCHING_ORDER = 2;

	/**
	 * Error matching any order.
	 */
	const MATCHING_EXCEPTION = 3;

}