<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teaching_plan;

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
        $teaching_plans = Teaching_plan::all();
        return view('teaching_plan.list', ['teaching_plans' => $teaching_plans]);
    }
}
