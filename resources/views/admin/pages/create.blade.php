@extends('layouts.admin')


@section('content')
<h2>Admin Create Page</h2>  


<form action="{{ route('admin.page.store') }}" method="POST" role="form">

   @include('partials.forms.page')
</form>

@stop