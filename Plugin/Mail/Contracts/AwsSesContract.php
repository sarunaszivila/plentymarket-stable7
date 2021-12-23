<?php
namespace Plenty\Plugin\Mail\Contracts;

use Plenty\Plugin\Mail\Models\AwsSesCredentials;
use Plenty\Plugin\Mail\Models\Email;
use Plenty\Plugin\Mail\Models\EmailSenderResult;

/**
 * Plugin AWS Simple Email Service
 */
interface AwsSesContract 
{

	/**
	 * Composes an email message and immediately queues it for sending via AWS SES
	 */
	public function sendEmail(
		Email $email, 
		AwsSesCredentials $credentials
	):EmailSenderResult;

}