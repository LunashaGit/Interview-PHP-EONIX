<!DOCTYPE html>
<html>
    <head>
        <title>People Summary</title>
    </head>
    <body>
        <h1>People {{$person->name}}</h1>
        <div>
            <p>Name: {{$person->name}}</p>
            <p>Last Name: {{$person->last_name}}</p>
        </div>
        <a href="/people/{{$person->uuid}}/edit">Edit</a>
        <form method="POST" action="/people/{{$person->uuid}}/delete">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="submit" value="Delete">
        </form>
    </body>
</html>
