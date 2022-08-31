<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function index()
    {
/*         $tasks = Tasks::orderBy('id', 'desc')
                ->get();
 */
        return view('tasks.dashboard', /* compact('tasks') */);
    }

    public function show(Tasks $task)
    {
        return view('tasks.show', compact('task'));
    }
}
