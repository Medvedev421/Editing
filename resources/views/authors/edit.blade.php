<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование автора</title>
</head>
<body>

<h1>Редактировать автора</h1>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/authors/{{ $author->id }}">
    @csrf

    <div>
        <label>Имя:</label><br>
        <input type="text" name="name" value="{{ $author->name }}">
    </div>

    <br>

    <div>
        <label>Возраст:</label><br>
        <input type="number" name="age" value="{{ $author->age }}">
    </div>

    <br>

    <div>
        <label>Город:</label><br>
        <input type="text" name="city" value="{{ $author->city }}">
    </div>

    <br>

    <button type="submit">Сохранить</button>
</form>

</body>
</html>
