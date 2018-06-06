@extends('layouts.app')

@section('content')

    <h1>編集ページ</h1>

    {!! Form::model($review, ['route' => ['reviews.update', $review->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('name', '名前:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('weight', '体重:') !!}
            {!! Form::text('weight', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('morning', '朝食:') !!}
        {!! Form::text('morning', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('lunch', '昼食:') !!}
            {!! Form::text('lunch', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('dinner', '夕食:') !!}
            {!! Form::text('dinner', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('content', '今日したこと:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection
