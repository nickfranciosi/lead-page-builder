@extends('layouts.admin')


@section('content')
    <h2>Edit Form</h2>

    {!! Form::model($page, array('route' => array('admin.page.update', $page->id), 'method' => 'PUT')) !!}
        @include('partials.forms.page')
    {!! Form::close() !!}
@stop