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

        \DB::beginTransaction();
        try
        {
            // 教案を登録する
            Teaching_plan::create($inputs);
            \DB::commit();
        } catch (\Throwable $e)
        {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', '教案を投稿しました！');
        return redirect(route('teaching_plans'));
    }

    /**
     * 教案編集画面を表示する
     * @param int $id
     * @return view
     */
    public function showEdit($id)
    {
        $teaching_plan = Teaching_plan::find($id);

        if (is_null($teaching_plan)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('teaching_plans'));
        }
        return view('teaching_plan.edit', ['teaching_plan' => $teaching_plan]);
    }

    /**
     * 教案を更新する
     *
     * @return view
     */
    public function exeUpdate(Teaching_planRequest $request)
    {
        // 渡ってきた教案データを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // 教案を編集する
            $teaching_plan = Teaching_plan::find($inputs['id']);
            $teaching_plan->fill([
                'title' => $inputs['title'],
                'content' => $inputs['content'],
            ]);
            $teaching_plan->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', '教案を更新しました！');
        return redirect(route('teaching_plans'));
    }

    /**
     * 投稿した教案を削除する
     * @param int $id
     * @return view
     */
    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('teaching_plans'));
        }

        try {
            // 教案を削除する
            $teaching_plan = Teaching_plan::destroy($id);
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }


        \Session::flash('err_msg', '教案を削除しました！');
        return redirect(route('teaching_plans'));
    }
}
