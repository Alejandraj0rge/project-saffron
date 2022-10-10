@extends('layouts.main')

@section('content')

<div>
    <table id="table-index">
        <tr>
            @foreach ($columns as $key => $column)
            <th>{{$column}}</th>
            @endforeach
        </tr>
     @foreach ($data as $key => $value)
        <tr>
            @foreach($value as $key => $item)
                <td>{{$item}}</td>
            @endforeach
        </tr>
    @endforeach
    </table>
</div>

@endsection