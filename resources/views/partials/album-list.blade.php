<table class="table">
    <thead>
    <th><a href="{{ url('/album?sort=name') }}">Name</a></th>
    @if(!isset($band))
        <th><a href="{{ url('/album?sort=band') }}">Band</a></th>
    @endif
    <th><a href="{{ url('/album?sort=recorded_date') }}">Recorded Date</a></th>
    <th><a href="{{ url('/album?sort=release_date') }}">Release Date</a></th>
    <th><a href="{{ url('/album?sort=number_of_tracks') }}"># of Tracks</a></th>
    <th><a href="{{ url('/album?sort=label') }}">Label</a></th>
    <th><a href="{{ url('/album?sort=producer') }}">Producer</a></th>
    <th><a href="{{ url('/album?sort=genre') }}">Genre</a></th>
    <th>Edit</th>
    <th>Delete</th>
    </thead>
    <tbody>
    @foreach ($albums as $album)
        <tr>
            <td><a href="{{ url('/album/'. $album->getId()) }}">{{ $album->name }}</a></td>
            @if(!isset($band))
                <td><a href="{{ url('/band/'. $album->band->getId()) }}">{{ $album->band->name }}</a></td>
            @endif
            <td>{{ $album->recorded_date }}</td>
            <td>{{ $album->release_date }}</td>
            <td>{{ $album->number_of_tracks }}</td>
            <td>{{ $album->label }}</td>
            <td>{{ $album->producer }}</td>
            <td>{{ $album->genre}}</td>
            <td><a class="btn btn-primary" href="{{ url('/album/'. $album->getId() .'/edit') }}">Edit</a></td>
            <form action="{{ url('/album/'. $album->getId()) }}" method="POST">
                {{ method_field('DELETE') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>