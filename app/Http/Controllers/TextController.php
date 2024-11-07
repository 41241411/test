<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TextController extends Controller
{
    public function index()
    {
         // 抓取 'items' 資料表中的所有資料
    $items = DB::table('items')->get();  // 使用 get() 來抓取所有資料

    // 傳遞資料到 'index' 視圖
    return view('index', compact('items'));
    }
}
