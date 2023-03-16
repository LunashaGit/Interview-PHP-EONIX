<!DOCTYPE html>
<html>
    <head>
        <title>People Edit</title>
    </head>
    <body>
        <h1>People Edit</h1>
        <form method="POST" action="/people/edit/{{$person->uuid}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Name" value="{{$person->name}}">
            <input type="text" name="last_name" placeholder="Last_Name" value="{{$person->last_name}}">
            <input type="submit" value="Create">
        </form>
    </body>
</html>
