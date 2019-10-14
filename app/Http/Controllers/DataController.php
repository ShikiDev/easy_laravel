<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('index', [
            'message' => 'Просто титульная страница, которая ничего не содержит. Следуйте оговоренным путям /table и /table-pattern + параметры'
        ]);
    }

    public function table()
    {
        return view('table', [
            'data' => Data::paginate(30),
        ]);
    }

    public function tablePattern(Request $request)
    {
        $first = $request->get('h1');
        $second = $request->get('h2');
        $third = $request->get('h3');

        $result['data'] = [
            'h1' => !empty($first) ? $first : false,
            'h2' => !empty($second) ? $second : false,
            'h3' => !empty($third) ? $third : false
        ];

        return view('table_pattern', [
            'result' => $result
        ]);
    }
}
