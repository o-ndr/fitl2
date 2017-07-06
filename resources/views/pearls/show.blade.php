@extends('layouts.master')

@section('title', $pearl->pearl)

@section('content')
	<h1>{{ $pearl->pearl }}</h1>
	<p>{{ $pearl->child_name }}, {{ $pearl->child_age }}</p>
@endsection