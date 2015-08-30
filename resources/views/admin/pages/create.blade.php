@extends('layouts.admin')


@section('content')
<h2>Admin Create Page</h2>  

{!! Form::open(array('route' => 'admin.page.store')) !!}
    @include('partials.forms.page')
{!! Form::close() !!}
@stop