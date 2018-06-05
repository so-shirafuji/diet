@extends('layouts.app')

@section('content')

    <h1>ダイエット記録</h1>

    @if (count($reviews) > 0)
         <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>日時</th>
                    <th>名前</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <td>{!! link_to_route('reviews.show', $review->id, ['id' => $review->id]) !!} </td>
                        <td>{{$review->created_at}}</td>
                        <td>{{$review->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
　　{!! link_to_route('reviews.create', '今日の状態を入力') !!}

@endsection
