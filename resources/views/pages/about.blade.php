@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$pageTitle}}</h1>
@if (count($skills)>0)
<ul>
    @foreach ($skills as $skills)
        <li>{{$skills}}</li>
    @endforeach
@endif
</ul>
</div> 
@endsection