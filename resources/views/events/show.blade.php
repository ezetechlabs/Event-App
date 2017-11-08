@extends('layouts/app')

@section('content')

	<h1>{{ $event->title }}</h1>

	<p>{{ $event->description }}</p>
	<a class="btn btn-info" href="{{ route('events.edit', $event) }}">Modifier</a>
	<form action="{{ route('events.destroy',$event)  }}" method="POST" class="inline-block">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<input type="submit" class="btn btn-danger" value="Supprimer">
	</form>
	<hr>
	<p>
		<a href="{{ route('home') }}">Tous les evenements</a>
	</p>
	

@stop