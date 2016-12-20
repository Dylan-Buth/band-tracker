@extends('layouts.master')
@section('content')
    <form method="POST" action="{{ url('/band/'. $band->getId()) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ method_field('PUT') }}

        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" name="name" value="{{ $band->name }}" />
        </div>
        <div class="form-group">
            <label for="name">Start Date</label>
            <input type="text" class="form-control" name="start_date" value="{{ $band->start_date }}" />
        </div>
        <div class="form-group">
            <label for="name">Website</label>
            <input type="text" class="form-control" name="website" value="{{ $band->website }}" />
        </div>
        <div class="form-group">
            <label for="name">Still Active</label>
            <select class="form-control" name="still_active">
                <option {{ (!$band->still_active) ? 'selected="selected"' : '' }} value="0">No</option>
                <option {{ ($band->still_active) ? 'selected="selected"' : '' }} value="1">Yes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection