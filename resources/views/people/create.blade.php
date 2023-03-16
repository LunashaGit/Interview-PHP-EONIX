<!DOCTYPE html>
<html>
    <head>
        <title>People Creation</title>
    </head>
    <body>
        <h1>People Creation</h1>
        <form method="POST" action="/people/create">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="last_name" placeholder="Last_Name">
            <input type="submit" value="Create">
        </form>
    </body>
</html>
