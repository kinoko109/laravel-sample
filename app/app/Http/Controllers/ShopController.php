<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index() {
        // 1 -> 多
        $shops = Area::find(1)->shops; // shopsメソッドを呼ぶ

        // 多 -> 1
        $area = Shop::find(2)->area;

        // 多 -> 多
        $routes = Shop::find(2)->routes()->get();

        dd($shops, $area, $routes);
    }
}
