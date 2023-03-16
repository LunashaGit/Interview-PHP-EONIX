<!DOCTYPE html>
<html>
    <head>
        <title>People List</title>
    </head>
    <body>
        <h1>People List</h1>
        <div>
            <p>Search : </p>
            <form method="GET" action="/">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="Name" value="{{ request('search') }}">
                <input type="submit" value="Search">
            </form>
        </div>
        <a href="/people/create">Create</a>
        <ul>
            @foreach ($people as $person)
                <li>
                    <a href="/people/{{ $person->uuid }}">
                        {{ $person->name }} {{ $person->last_name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
