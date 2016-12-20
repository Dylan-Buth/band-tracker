@extends('layouts.master')
@section('content')
    <h3>{{ $album->name }}</h3>
    <ul class="list-inline">
        <li><a class="btn btn-primary" href="{{ url('/album/'. $album->getId() .'/edit') }}">Edit</a></li>
        <li>
            <form action="{{ url('/album/'. $album->getId()) }}" method="POST">
                {{ method_field('DELETE') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item">Band: <a href="{{ url('/band/'. $album->band->getId()) }}">{{ $album->band->name }}</a></li>
        <li class="list-group-item">Recorded Date: {{ $album->recorded_date }}</li>
        <li class="list-group-item">Release Date: {{ $album->release_date }}</li>
        <li class="list-group-item">Number Of Tracks: {{ $album->number_of_tracks }}</li>
        <li class="list-group-item">Label: {{ $album->label }}</li>
        <li class="list-group-item">Producer: {{ $album->producer }}</li>
        <li class="list-group-item">Genre: {{ $album->genre }}</li>
    </ul>
@endsection
