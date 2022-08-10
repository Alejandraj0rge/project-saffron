<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $task = Tasks::create($data);

        return response()->json(['data' => $task], 201);
    }

    public function index()
    {
        $task = Tasks::all();

        return response()->json(['data' => $task]);
    }

    public function update(Request $request, Tasks $task)
    {
        $data = $request->all();

        $task->update($data);

        return response()->json(['data' => $task]);
    }

    public function toggleCompleted(Tasks $task)
    {
        $task->update([ 
            'completed' => ! $task->completed
        ]);

        return response()->json(['data' => 
            [
                'completed' => $task->completed
            ]
        ]);
    }
}
