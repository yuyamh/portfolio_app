<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teaching_planController extends Controller
{
    /**
     * 教案一覧を表示する
     *
     *
     * @return view
     */
    public function showList()
    {
        return view('teaching_plan.list');
    }
}
