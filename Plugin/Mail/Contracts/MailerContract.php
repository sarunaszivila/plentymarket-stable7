<?php
namespace Plenty\Plugin\Mail\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;
use Plenty\Plugin\Mail\Models\ReplyTo;

/**
 * Plugin Mailer Service
 */
interface MailerContract 
{

	/**
	 * Send an email containing html
	 */
	public function sendHtml(
		string $html, 
		 $recipients, 
		string $subject = "", 
		array $cc = [], 
		array $bcc = [], 
		ReplyTo $replyTo = null, 
		array $attachments = []
	);

	/**
	 * Send an email that will get rendered by twig
	 */
	public function sendFromTwig(
		string $twigPath, 
		array $data, 
		 $recipients, 
		string $subject = "", 
		array $altConfig = [], 
		array $cc = [], 
		array $bcc = [], 
		ReplyTo $replyTo = null, 
		array $attachments = []
	);

	/**
	 * Send given message as email
	 */
	public function sendFromMime(
		string $mimeMessage, 
		 $recipients, 
		array $altConfig = [], 
		array $cc = [], 
		array $bcc = [], 
		ReplyTo $replyTo = null, 
		array $attachments = []
	);

}