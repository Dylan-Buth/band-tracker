@extends('layouts.master')
@section('content')
    <h3>{{ $band->name }}</h3>
    <ul class="list-inline">
        <li><a class="btn btn-primary" href="{{ url('/band/'. $band->getId() .'/edit') }}">Edit</a></li>
        <li>
            <form action="{{ url('/band/'. $band->getId()) }}" method="POST">
                {{ method_field('DELETE') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item">Start Date: {{ $band->start_date }}</li>
        <li class="list-group-item">Website: {{ $band->website }}</li>
        <li class="list-group-item">Still Active: {{ ($band->still_active) ? 'Yes' : 'No' }}</li>
    </ul>

    <h4>Albums</h4>
    @include('partials.album-list')
@endsection
