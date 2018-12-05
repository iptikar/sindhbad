@extends('layouts.seller-app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

   
@endsection

@section('content')

{{ Form::open(array('url' => 'user-admin-14e1813e3d0cf9da1a9dafc6afadff37')) }}
    
 @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
	 

	 
   <input type = "text" name = "name " />
   <input type = "submit" value = "submit" />
{{ Form::close() }}
@endsection
