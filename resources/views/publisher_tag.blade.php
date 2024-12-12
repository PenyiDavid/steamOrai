<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('success'))
        <p>{{session('success')}}</p>
    @endif
    <form action="{{route('publisher.store')}}" method="post">
        @csrf
        <label for="publisher_team">Publisher:</label>
        <input type="text" name="publisher_team" id="publisher_team">
        <input type="submit" value="Save">
    </form>
</body>
</html>