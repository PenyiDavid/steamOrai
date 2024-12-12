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
    <form action="{{route('tag.store')}}" method="POST">
        @csrf
        <label for="tag_name">Tag:</label>
        <input type="text" name="tag_name" id="tag_name">
        <input type="submit" value="Save">
    </form>
</body>
</html>