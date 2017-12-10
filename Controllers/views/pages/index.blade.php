@extends('layouts.app')
@section('content')
    <div class='jumbotron text-center'>
        <h1>{{$title}}</h1>
        <p>Taking You From <strong>Poverty</strong> To At Least The Middle Class Through Education In Coding.</p>
        @if(!Auth::user())
        <a class='btn btn-primary btn-lg' href='/login' role='button'>Login</a>
        <a class='btn btn-success btn-lg' href='/register' role='button'>Register</a>
        @endif
    </div>
@endsection
