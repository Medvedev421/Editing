<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Список авторов
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // Форма редактирования
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    // Сохранение изменений
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'age'  => 'nullable|integer',
            'city' => 'nullable|string',
        ]);

        $author = Author::findOrFail($id);
        $author->update([
            'name' => $request->name,
            'age'  => $request->age,
            'city' => $request->city,
        ]);

        return redirect('/authors');
    }
}
