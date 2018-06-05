@extends('layouts.app')

@section('content')

    <h1>編集ページ</h1>

    {!! Form::model($review, ['route' => ['reviews.update', $review->id], 'method' => 'put']) !!}

        {!! Form::label('name', '名前:') !!}
        {!! Form::text('name') !!}
        
        {!! Form::label('weight', '体重:') !!}
        {!! Form::text('weight') !!}
        
        {!! Form::label('morning', '朝食:') !!}
        {!! Form::text('morning') !!}
        
        {!! Form::label('lunch', '昼食:') !!}
        {!! Form::text('lunch') !!}
        
        {!! Form::label('dinner', '夕食:') !!}
        {!! Form::text('dinner') !!}
        
        {!! Form::label('content', '今日したこと:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection
