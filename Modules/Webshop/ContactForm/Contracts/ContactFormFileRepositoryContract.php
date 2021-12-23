<?php
namespace Plenty\Modules\Webshop\ContactForm\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;

/**
 * Repository to upload files from the online store contact form and retrieve them
 */
interface ContactFormFileRepositoryContract 
{

	public function uploadFiles(
		array $fileData
	):array;

	public function getFile(
		string $fileName
	):StorageObject;

}