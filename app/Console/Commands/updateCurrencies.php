<?php

namespace App\Console\Commands;

use App\Currencies;
use Illuminate\Console\Command;

class updateCurrencies extends Command
{
    /**
     * сигнатура консольной команды
     *
     * @var string
     */
    protected $signature = 'currencies:update';

    /**
     * Описание консольной команды
     *
     * @var string
     */
    protected $description = 'Обновление курсов валют';

    /**
     * Создание нового экземпляра объектра консольной команды
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Выполнение консольной команды
     *
     * @return mixed
     */
    public function handle()
    {
        Currencies::updateAll();
    }
}
