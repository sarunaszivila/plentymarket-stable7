<?php
namespace Plenty\Modules\ElasticSync\Models\Report;


/**
 * The run report option model.
 */
abstract class RunReportOption 
{

	const STATUS = 'status';

	const SOURCE_FILENAME = 'source_filename';

	const STATUS_STARTING = 'starting';

	const STATUS_RUNNING = 'running';

	const STATUS_FAILED = 'failed';

	const STATUS_CANCELED = 'canceled';

	const STATUS_COMPLETED = 'completed';

	const STATUS_VALIDATION = 'validation';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$run_report_id;
	
public		$name;
	
public		$value;
	
public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}