@extends('layouts/app')

@section('content')
<h1> liste des article </h1>

@foreach($articles as $article) 

<h2> {{$article}}</h2>

@endforeach

@endsection('content')

