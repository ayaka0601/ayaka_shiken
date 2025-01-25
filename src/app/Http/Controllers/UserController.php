<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WeightLog;
use Illuminate\Http\Request;
use App\Http\Requests\WeightLogRequest;

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
    public function add()
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

    public function delete(Request $request)
    {
        $weight_log = WeightLog::find($request->id);
        return view('weight_logs/{:weightLogId}/delete', ['weight_log' => $weight_log]);
    }

}
