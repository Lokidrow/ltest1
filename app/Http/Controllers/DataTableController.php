<?php

namespace App\Http\Controllers;

use App\Currencies;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function loadData()
    {
        $data = Currencies::all();
        return response()->json([
            'items' => $data
        ]);
    }
}
