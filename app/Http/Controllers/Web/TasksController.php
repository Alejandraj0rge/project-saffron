<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\Modules;
use App\Models\Projects;
use App\Models\Tasks;
use Illuminate\Support\Facades\Schema;

class TasksController extends Controller
{
    public function __construct()
    {
    }
    
    public function dashboard()
    {
        $tasks = Tasks::all()->toJson();
        $events = Events::all()->toJson();
        $events = Projects::all()->toJson();
        return view('tasks.dashboard', compact('tasks', 'events'));
    }
    
    public function index()
    {
        $columns = Schema::getColumnListing('tasks');
    
        $data = Tasks::all()->toArray();

        return view('tasks.index', compact('columns', 'data'));
    }

    public function show(Tasks $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function calendar()
    {

    }
}
