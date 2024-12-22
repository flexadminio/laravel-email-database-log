<?php

namespace Flexadmin\LaravelEmailDatabaseLog;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSending;
use Flexadmin\LaravelEmailDatabaseLog\EmailLogger;

class LaravelEmailDatabaseLogEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        MessageSending::class => [
            EmailLogger::class,
        ],
    ];
}
