@extends('layouts.master')
@section('content')
    <form method="POST" action="{{ url('/band') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label for="name">Start Date</label>
            <input type="text" class="form-control" name="start_date" />
        </div>
        <div class="form-group">
            <label for="name">Website</label>
            <input type="text" class="form-control" name="website" />
        </div>
        <div class="form-group">
            <label for="name">Still Active</label>
            <select class="form-control" name="still_active">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection