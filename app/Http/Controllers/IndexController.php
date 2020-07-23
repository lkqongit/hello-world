<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\Take; // 队列进程

class IndexController extends Controller
{
    // 测试队列
    public function index(Request $request)
    {

        dispatch(new \App\Jobs\take());
    }


}
