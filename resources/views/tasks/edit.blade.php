@extends('layouts.app')

@section('content')

<h1>id = {{$task->id}}のタスク編集ページ</h1>

{!! Form::model($task, ['route'=>['tasks.update', $task->id], 'method'=>'PUT']) !!}
    
    <div class="form-group">
        {!! Form::label('content', 'タスク') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
    
    {!! Form::submit('更新', ['class'=>'btn btn-primary']) !!}
    
{!! Form::close() !!}

@endsection