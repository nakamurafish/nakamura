@extends('layout')

@section('content')

<div class="inner">

    <h1>入力フォーム</h1>

    <form method="post" action="test_confirm">
    {!! csrf_field() !!}

</div>

@endsection
