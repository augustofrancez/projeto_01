<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // function index
    public function index()
    {
        $users = User::paginate(2);
        // regras de negócio
        // variáveis e conteúdos => view
        // return 'função index';
        return view('users.index', [
            'greeting' => 'olá mundo!',
            'users' => $users
        ]);
    }

    // método create
    public function create()
    {
        return view('users.create');
    }

    // método store
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'avatar' => 'file'
        ]);

        // User::create($input);
        // dd($input);

        if (!empty($input['avatar']) && $input['avatar']->isValid()) {
            $input['avatar']->store();
        }

        dd($input);

        return redirect()->back();
    }

    // método show
    public function show(User $user)
    {
        // dd('x',$id);
        return view('users.show', [
            'user' => $user
        ]);
    }
}
