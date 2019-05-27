@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>

<table class="table table-striped">
    
    @if(count($tasks) > 0)
    <thead>
        <tr>
            <th>id</th>
            <th>タスク</th>
            <th>ステータス</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ link_to_route('tasks.show', $task->id, ['id'=>$task->id]) }}</td>
            <td>{{$task->content}}</td>
            <td>{{$task->status}}</td>
        </tr>
        @endforeach
    </tbody>
    @endif
    
</table>

@endsection