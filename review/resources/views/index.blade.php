@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <ul>
            @foreach ($reviews as $review)
                <li>{!! link_to_route('rebiews.show', $review->id, ['id' => $review->time]) !!} :  {{ $review->name }} {{ $review->weight }}{{ $review->morning }}{{ $review->lunch }}{{ $review->dinner }}{{ $review->content }}</li>
            @endforeach
        </ul>
    @endif
　　{!! link_to_route('messages.create', '新規メッセージの投稿') !!}

@endsection
