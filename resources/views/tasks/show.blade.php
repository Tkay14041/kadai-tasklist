@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
@if (count($task) > 0)
	<h1>id = {{ $task->id }}のタスク詳細ページ</h1>
	
	<table class='table table-bordered'>
		<tr>
			<th>id</th>
			<td>{{ $task->id }}</td>
		</tr>
		<tr>
			<th>task</th>
			<td>{{ $task->content }}</td>
		</tr>
		<tr>
			<th>status</th>
			<td>{{ $task->status }}</td>
		</tr>
	@if(\Auth::id() === $task->user_id)
	</table>
	{!! link_to_route('tasks.edit', 'edit this task', ['id' => $task->id], ['class' => 'btn btn-success']) !!}
	
	{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
		{!! Form::submit('--- delete ----', ['class' => 'btn btn-danger']) !!}
	{!! Form::close() !!}
	@endif
@else
	<h1>The data is already deleted</h1>
	{!! link_to_route('tasks.index', 'go to index', null, ['class' => 'btn btn-success']) !!}
@endif	

@endsection