<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Консольный команды предоставляемые вашим приложением
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\updateCurrencies::class
    ];

    /**
     * Запланированные задачи вашего приложения
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('currencies:update')->everyThirtyMinutes(); // Обновление валют каждые 15 минут
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
