@extends('layout')

@section('content')
<form action="{{ route('update',['id' => $memo->id]) }}" method="post">
@csrf
<textarea name="content" id="" cols="30" rows="10">{{ $memo->content }}</textarea>
<input type="submit" value="更新">
<a href="{{ route('index') }}">戻る</a>
</form>
@if($errors->any())
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
@endif
@endsection