<!DOCTYPE html>
<html>
    <head>
        <title>People</title>
    </head>
    <body>
        <h1>People</h1>
        <ul>
            @foreach ($people as $person)
                <li>{{ $person->name }}</li>
            @endforeach
        </ul>
    </body>
</html>
