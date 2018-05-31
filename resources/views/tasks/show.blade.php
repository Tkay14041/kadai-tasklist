@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
	<h1>id = {{ $task->id }}のタスク詳細ページ</h1>
	<p>{{ $task->content }}</p>
	
	{!! link_to_route('tasks.edit', 'edit this task', ['id' => $task->id]) !!}
	
	{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
		{!! Form::submit('delete') !!}
	{!! Form::close() !!}

@endsection