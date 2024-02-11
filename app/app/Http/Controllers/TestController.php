<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use DB;

class TestController extends Controller
{
    public function index() {

        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereHoge2 = Test::where('text', '=', 'hoge2')->get();

        $queryBuilder = DB::table('tests')->where('text', '=', 'hoge')->select('id', 'text')->get();

        dd($values, $count, $first, $whereHoge2, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}
