<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store(Request $request)
    {
        $task = Tasks::create($request->all());

        return response()->json($task);
    }

    public function index()
    {
        $task = Tasks::all();

        return response()->json($task);
    }

    public function update(Request $request, Tasks $task)
    {
        // dd($request->all(), $task);
        $data = $request->all();

        $task->update($data);

        return response()->json(['data' => $task]);
    }

    public function indexComments()
    {
        Comments::all();
    }

    public function storeComment()
    {

    }
}