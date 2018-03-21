<?php

namespace App\Http\Controllers;

use App\Currencies;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    /**
     * Выдаём список валют
     * @return \Illuminate\Http\JsonResponse
     */
    public function loadData()
    {
        $data = Currencies::all();
        return response()->json([
            'items' => $data
        ]);
    }
}
