@extends('layouts/app')

@section('content')

	<h1>{{ $events->count() }} {{ str_plural('Evenement'), $events->count() }}</h1>

	@if(count($events)> 0)
	<ul>
		@foreach($events as $event)
		<li><a href="{{ route('events.show', $event) }}">{{ $event->title }}</a></li>
		@endforeach
	</ul>
	@else
	<p>Aucun evenement pour le moment.</p>

	@endif

@stop