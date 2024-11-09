<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SalesController extends Controller
{
    public function index()
    {
        // 使用查詢語句直接從資料表 sales_data 獲取資料
        $salesData = DB::table('sales_data')->get();

        // 格式化日期和銷售數據
        $dates = $salesData->pluck('date')->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('Y/m/d'); // 格式化為 YYYY/MM/DD
        });

        $sales = $salesData->pluck('sales');

        return response()->json([
            'dates' => $dates,
            'sales' => $sales
        ]);
    }
}
