<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="{{route('game.store')}}" method="POST"><br>
        Név:<input type="text" name="game_name" id="game_name"><br>
        Kiadás datuma:<input type="date" name="release_date" id="release_date"><br>
        Rating:<input type="number" name="rating" id="rating"><br>
        Korhataros:<input type="checkbox" name="age_restricted" id="age_restricted"><br>
        Ár:<input type="number" name="price" id="price"><br>
        Kép:<input type="file" name="picture_path" id="picture_path"><br>
        Desc:<input type="text" name="description" id="description"><br>
        <select name="publisher" id="publisher"><br>
            @foreach ($publishers as $publisher)
               <option value="{{$publisher->id}}">{{$publisher->publisher_team}}</option>
            @endforeach
        </select>
        <select name="tags" id="tags">
            @foreach ($tags as $tag)
               <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Szubmit">
    </form>
</body>
</html>