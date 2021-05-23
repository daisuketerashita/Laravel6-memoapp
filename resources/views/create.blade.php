@extends('layout')

@section('content')
<form action="{{ route('store') }}" method="post">
@csrf
<textarea name="content" id="" cols="30" rows="10"></textarea>
<input type="submit" value="作成">
<a href="{{ route('index') }}">戻る</a>
</form>
@if($errors->any())
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
@endif
@endsection