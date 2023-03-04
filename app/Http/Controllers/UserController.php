<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        $authors = User::paginate();
        return view('authors.index', compact('authors'));
    }

    function show($id)
    {
        $author = User::find($id);
        return view('authors.show', compact('author'));
    }
}
