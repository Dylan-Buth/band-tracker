@extends('layouts.master')
@section('content')
    <form method="POST" action="{{ url('/album') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" name="name" value="{{ $album->name }}" />
        </div>
        <div class="form-group">
            <label for=band_id">Band *</label>
            <select name="band_id" class="form-control">
                @foreach($bands as $band)
                    <option {{ ($album->band == $band) ? 'selected="selected"' : '' }} value="{{ $band->getId() }}">{{ $band->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Recorded Date</label>
            <input type="text" class="form-control" name="recorded_date" value="{{ $album->recorded_date }}" />
        </div>
        <div class="form-group">
            <label for="name">Release Date</label>
            <input type="text" class="form-control" name="release_date" value="{{ $album->release_date }}" />
        </div>
        <div class="form-group">
            <label for="name">Number Of Tracks</label>
            <input type="text" class="form-control" name="number_of_tracks" value="{{ $album->number_of_tracks }}" />
        </div>
        <div class="form-group">
            <label for="name">Label</label>
            <input type="text" class="form-control" name="label" value="{{ $album->label }}" />
        </div>
        <div class="form-group">
            <label for="name">Producer</label>
            <input type="text" class="form-control" name="producer" value="{{ $album->producer }}" />
        </div>
        <div class="form-group">
            <label for="name">Genre</label>
            <input type="text" class="form-control" name="genre" value="{{ $album->genre }}" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection