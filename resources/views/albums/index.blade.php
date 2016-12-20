@extends('layouts.master')
@section('content')
    <a class="btn btn-primary" href="{{ url('/album/create') }}">Create Album</a>
    @include('partials.album-list')
@endsection
