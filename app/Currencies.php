<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Валюты
 *
 * Class Currencies
 */
class Currencies extends Model
{

    protected $table = 'currencies';

    protected $fillable = ['name', 'volume', 'amount'];

    /**
     * Обновить все валюты
     * @throws \Exception
     */
    public static function updateAll()
    {
        $arr = self::getData('http://phisix-api3.appspot.com/stocks.json');
        if (isset($arr['stock'])) {
            foreach ($arr['stock'] as $row) {
                self::storeRow($row);
            }
        }
    }

    /**
     * Получить валюты с сервера
     * @param string $url
     * @return array
     * @throws \Exception
     */
    private static function getData(string $url)
    {
        try {
            $a = curlGet($url);
            $obj = json_decode($a, true);
            return ($obj ? $obj : array());
        }
        catch (\Exception $e) {
            return array();
        }
    }

    /**
     * Сохранить одну валюту в бд
     * @param array $row
     */
    private static function storeRow(array $row)
    {
        $rec = Currencies::where('name', '=', $row['name'])->first();
        if (!$rec) {
            $rec = new Currencies();
            $rec->name = $row['name'];
        }
        $rec->volume = $row['volume'];
        $rec->amount = $row['price']['amount'];
        $rec->save();
    }

}
