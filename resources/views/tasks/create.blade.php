@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
	<h1>タスク新規作成ページ</h1>
    
	{!! Form::model($task, ['route' => 'tasks.store']) !!}
	
		{!! Form::label('content', 'タスク：') !!}
		{!! Form::text('content') !!}
		
		{!! Form::label('status','status:') !!}
		{!! Form::text('status') !!}
		
		{!! Form::submit('submit') !!}
	
	{!! Form::close() !!}

@endsection