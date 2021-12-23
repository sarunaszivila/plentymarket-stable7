<?php
namespace Plenty\Modules\Amazon\Contracts;


interface AmazonClientResponse 
{

	public function getResponseContent(
	);

	public function getResponseMetaData(
	):array;

}