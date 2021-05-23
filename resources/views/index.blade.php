@extends('layout')

@section('content')
<h2><a href="{{ route('create') }}" style="text-decoration: none">新規作成</a></h2>
@foreach($memos as $memo)
<div>
<span>{{ $memo->content }}</span>　<a href="{{ route('edit',['id' => $memo->id]) }}">編集</a>　<a href="{{ route('delete',['id' => $memo->id]) }}">削除</a>
</div>
@endforeach
@endsection