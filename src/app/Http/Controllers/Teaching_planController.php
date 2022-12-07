<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teaching_plan;
use App\Http\Requests\Teaching_planRequest;

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

    /**
     * 教案投稿画面を表示する
     *
     * @return view
     */
    public function showCreate()
    {
        return view('teaching_plan.form');
    }

    /**
     * 教案を投稿する
     *
     * @return view
     */
    public function exeStore(Teaching_planRequest $request)
    {
        // 渡ってきた教案データを受け取る
        $inputs = $request->all();
        // 教案を登録する
        Teaching_plan::create($inputs);
        \Session::flash('err_msg', '教案を投稿しました！');
        return redirect(route('teaching_plans'));
    }


}
