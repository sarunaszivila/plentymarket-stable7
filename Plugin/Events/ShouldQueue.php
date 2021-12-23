<?php
namespace Plenty\Plugin\Events;

use Illuminate\Contracts\Queue\ShouldQueue as ShouldQueueInterface;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Cloud\Storage\Factories\StorageFactory;
use Plenty\Modules\Queue\Jobs\SystemCommandJob;
use Plenty\Providers\EventServiceProvider;

/**
 * Class that allows plugin event listeners to be queued.
 */
abstract class ShouldQueue 
{

}