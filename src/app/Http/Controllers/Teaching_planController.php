<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teaching_plan;

class Teaching_planController extends Controller
{
    /**
     * 教案一覧を表示する
     *
     * @return view
     */
    public function showList()
    {
        $teaching_plans = Teaching_plan::all();
        return view('teaching_plan.list', ['teaching_plans' => $teaching_plans]);
    }

    /**
     * 教案詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        $teaching_plan = Teaching_plan::find($id);

        if (is_null($teaching_plan))
        {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('teaching_plans'));
        }
        return view('teaching_plan.detail', ['teaching_plan' => $teaching_plan]);
    }
}
