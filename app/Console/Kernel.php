<?php

namespace App\Console;

use App\Actions\Utility\ActiveUserWalletIncrementer;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * @var ActiveUserWalletIncrementer
     */
    public $activeUserWalletIncrementer;

    /**
     * Injecting the Class ActiveUserWalletIncrementer.
     *
     * @var  \App\Actions\Utility\ActiveUserWalletIncrementer  $activeUserWalletIncrementer
     * @return void
     */


    public function __construct(Application $app, Dispatcher $events, ActiveUserWalletIncrementer $activeUserWalletIncrementer)
    {
        // Initialize the $incomeDistributionFunction variable in the constructor
        $this->activeUserWalletIncrementer = $activeUserWalletIncrementer;

        parent::__construct($app, $events);
    }


    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */


    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // Retrieve all users with the specific field value

        $schedule->call(function () {
            $this->activeUserWalletIncrementer->incrementWallets();
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}