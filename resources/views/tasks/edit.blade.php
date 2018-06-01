@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
	<h1>id = {{ $task->id }}のタスク編集ページ</h1>
	
	{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
	
		{!! Form::label('content', 'タスク') !!}
		{!! Form::text('content') !!}
		
		{!! Form::label('status','status:') !!}
		{!! Form::text('status') !!}
		
		{!! Form::submit('update') !!}
	
	{!! Form::close() !!}

@endsection