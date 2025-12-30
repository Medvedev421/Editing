<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторы</title>
</head>
<body>

<h1>Список авторов</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>Имя</th>
        <th>Возраст</th>
        <th>Город</th>
        <th></th>
    </tr>

    @foreach ($authors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->age ?? '—' }}</td>
            <td>{{ $author->city ?? '—' }}</td>
            <td>
                <a href="/authors/{{ $author->id }}/edit">Редактировать</a>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
