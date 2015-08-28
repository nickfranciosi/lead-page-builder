@extends('layouts.admin')


@section('content')
    <h2>Admin Index Page</h2>  

    <ul>
        <a href="{{ route('admin.page.create') }}"><li>Create A New Page</li></a>
    </ul>  

    
    @foreach ($pages as $page)
        <h4>{{ $page->recipient_name }}</h4>
        <p> {{ $page->expires_on->diffForHumans() }}</p>
        <a href="{{ route('admin.page.edit', $page->id) }}" class="btn btn-primary">Edit</a>
    @endforeach

@stop