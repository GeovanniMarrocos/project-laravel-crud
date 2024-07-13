<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {

        if(!$user = User::find($id))
        {
            return redirect()->route('users.index');
        }else
        {
            return view('users.show', compact('user'));
        }

    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        dump('cadastrando usuário');
    }
}
