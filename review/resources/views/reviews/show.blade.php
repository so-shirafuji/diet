@extends('layouts.app')

@section('content')

    <h1>詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>名前</th>
            <td>{{ $review->name }}</td>
        </tr>
        <tr>
            <th>体重</th>
            <td>{{ $review->weight }} kg</td>
        </tr>
        <tr>
            <th>朝食</th>
            <td>{{ $review->morning }}</td>
        </tr>
        <tr>
            <th>昼食</th>
            <td>{{ $review->lunch }}</td>
        </tr>
        <tr>
            <th>夕食</th>
            <td>{{ $review->dinner }}</td>
        </tr>
        <tr>
            <th>今日したこと</th>
            <td>{{ $review->content }}</td>
        </tr>
    </table>

    {!! link_to_route('reviews.edit', 'このページを編集', ['id' => $review->id]) !!}

    {!! Form::model($review, ['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

    


@endsection
