<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WeightLog;
use Illuminate\Http\Request;
use App\Http\Requests\WeightLogRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $weight_logs = WeightLog::all();
        $users = User::all();
        $weight_logs = WeightLog::simplePaginate(8);
        return view('index', ['weight_logs' => $weight_logs]);
    }
    //データ追加ページの表示
    public function add(WeightLogRequest $request)
    {
        return view('add');
    }
    //体重登録
    public function create(WeightLogRequest $request)
    {

        $weight_logs = WeightLog::all();
        $form = $request->all();
        WeightLog::create($form);
        return redirect('/weight_logs');
    }

    public function edit(Request $request)
    {
        $weight_log = WeightLog::find($request->id);
        return view('weight_logs/{:weightLogId}/delete', ['from' => $weight_log]);
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        WeightLog::find($request->id)->update($form);
        return redirect('/weight_logs');
    }

    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $weight_logs = WeightLog::find($request->id);
        return view('delete', ['weight_logs' => $weight_logs]);
    }

    // 削除機能
    public function remove(Request $request)
    {
        WeightLog::find($request->id)->delete();
        return redirect('/weight_logs');
    }

    //ログアウト
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}