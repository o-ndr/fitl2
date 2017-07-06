@extends('layouts.master')

@section('title', 'Pearls by Manooshka')

@section('content')
	<div class="page-header">
		<h1>Pearls by Manooshka</h1>
	</div>

<div class="list-group">
	@foreach ($shonibud as $pearl)
	<a href="{{ url('pearls', [$pearl->id]) }}" class="list-group-item">
		<h2 class="list-group-item-heading">{{ $pearl->pearl }}</h2>
		<p class="list-group-item-text">{{ $pearl->child_name }}, {{ $pearl->child_age }}</p>
	</a>
	@endforeach  
</div>

@endsection