<?php
namespace Plenty\Modules\Amazon\Exceptions;

use Throwable;

/**
 * Created by ptopczewski, 07.02.18 10:34
Class AmazonClientRequestException
 */
abstract class AmazonClientRequestException extends \Exception 

{

	abstract public function getType(
	):string;

	abstract public function getRequestId(
	):string;

	abstract public function getErrorCode(
	):string;

}