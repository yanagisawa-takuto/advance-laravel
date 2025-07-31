<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // データ一覧ページの表示
    public function index()
    {
        $authors = Author::simplePaginate(4);
        return view('index', ['authors' => $authors]);
    }

   // データ追加用ページの表示
    public function add()
    {
        return view('add');
    }

    // 追加機能
    public function create(Request $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }

    // データ編集ページの表示
    public function edit(Request $request){
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

    // 更新機能
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Author::find($request->id)->update($form);
        return redirect('/');
    }

    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['author' => $author]);
    }

    // 削除機能
    public function remove(Request $request)
    {
        Author::find($request->id)->delete();
        return redirect('/');
    }

    public function find()
    {
    return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
    $item = Author::where('name', $request->input)->first();
    $param = [
    'input' => $request->input,
    'item' => $item
    ];
    return view('find', $param);
    }
    public function bind(Author $author)
    {
    $data = [
    'item'=>$author,
    ];
    return view('author.binds', $data);
    }
    public function relate()
    {
    $items = Author::all();
    return view('authors.index', ['items' => $items]);
    }
}