@extends('layouts.admin')


@section('content')
    <h2>Single Page </h2>

    <h2>It was great talking to you {{$page->recipient_name}}.</h2>

    <p>{{ $page->message }}</p>

    


@stop