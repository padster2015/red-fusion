<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /** testing
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }



// schedule post data command every min


protected function schedulesSendPost(Schedule $scheduleFacebookPost)
    {
$TimeandDate = date(now)
        $scheduleFacebookPost->call(function () {
            DB::table('MessageQ')->select->where('sendat' '=' $TimeandDate);
        })->everyMinute();
}






}
