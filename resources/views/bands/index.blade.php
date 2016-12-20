@extends('layouts.master')
@section('content')
    <a class="btn btn-primary" href="{{ url('/band/create') }}">Create Band</a>
    <table class="table">
        <thead>
            <th><a href="{{ url('/band?sort=name') }}">Name</a></th>
            <th><a href="{{ url('/band?sort=start_date') }}">Start Date</a></th>
            <th><a href="{{ url('/band?sort=website') }}">Website</a></th>
            <th><a href="{{ url('/band?sort=still_active') }}">Still Active</a></th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($bands as $band)
                <tr>
                    <td><a href="{{ url('/band/'. $band->getId()) }}">{{ $band->name }}</a></td>
                    <td>{{ $band->start_date }}</td>
                    <td>{{ $band->website }}</td>
                    <td>{{ ($band->still_active) ? 'Yes' : 'No' }}</td>
                    <td><a class="btn btn-primary" href="{{ url('/band/'. $band->getId() .'/edit') }}">Edit</a></td>
                    <form action="{{ url('/band/'. $band->getId()) }}" method="POST">
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
