@extends('layouts.main')

@section('content')

<div style="display: flex;">
    <div id="overflow">
    <table class="tasks_table" id="view_tasks_table"> 
    
        <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>TASKS</th>
                <th>DESCRIPTION</th>
            </tr>   
        </thead>

        <tbody>

        </tbody>  

    </table>   
    </div> 

        

        <div id=sideAdd>

            <input type="submit"  id="btn_add_new_task1" value="ADD NEW TASK" onclick="newTaskbtn()"><br> 
        
            <form action="/api/tasks" id="right_menu" method="post" onsubmit="addNewTask(event, this)"> 
            @csrf
                <label for="title"><strong>Task:</strong><br></label>
                <input type="text"  name="title"><br>

                <label for="content"><strong>Content:</strong><br></label>
                <input type="text"  name="content"><br>
                
                <input type="submit" class="btn_add_new_task2" value="ADD NEW TASK"><br>
                
            </form>
            <p style="color: tomato">@error('title') {{$message}} @enderror</p>
            <p style="color: tomato">@error('content') {{$message}} @enderror</p>

        </div>
</div>

<script>

    async function getTaskList() 
    {

       /*  const response = await fetch("{{ route('api.tasks.index') }}")
            .then(res => res.json())
            .catch(error => console.log('ERROR'));

        const taskList = response.data;
        const table = document.getElementById("view_tasks_table").querySelector('tbody');

        table.innerHTML = '';

            taskList.forEach(task => {

                addTaskToTable(task, table);

            }); */

    }

/*     window.addEventListener("pageshow", function(event) {

        getTaskList();

        }); */

    </script>

@endsection