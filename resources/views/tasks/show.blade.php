@extends('layouts.main')

@section('content')


<p id="header_show">SHOWING TASK #{{$task->id}}</p>

    <div style="display: flex;">

        <form id="show_page" action="{{ route('api.tasks.update', ['task' => $task->id]) }}" onsubmit="updateTask(event, this)" method="post">

            @csrf

            <input type="hidden" name="_method" value="PUT">

            <input type="text" name="title" id="title_show" value="{{strtoupper($task->title)}}"><br>

            <textarea name="content" id="content_show" rows="4" cols="50">{{$task->content}}</textarea><br><br>

            <input style=" width: 100%;" type="submit" class="btn_add_new_task2" value="UPDATE TASK"><br>

        </form>

    </div>

@endsection