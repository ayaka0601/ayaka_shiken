<?php

namespace App\Http\Controllers;

use App\Models\WeightLog;
use Illuminate\Http\Request;
use App\Http\Requests\WeightLogRequest;

class WeightLogController extends Controller{
    public function getProducts()
    {
        $weight_logs = WeightLog::all();
        return view('index');
    }

    public function upload(WeightLogRequest $request)
    {
        $weight_log_data = new WeightLog();
        $weight_log_data->date = $_POST["weight_log_date"];
        $weight_log_data->weight = $_POST["weight_log_weight"];
        $weight_log_data->calories = $_POST["weight_log_calories"];
        $weight_log_data->exercise_time = $_POST["weight_log_exercise_time"];
        $weight_log_data->exercise_content = $_POST["weight_log_exercise_content"];
        $weight_log_data->save();

        $weight_logs = WeightLog::all();

        return redirect('/weight_logs/{:weightLogId}/update');
    }
}