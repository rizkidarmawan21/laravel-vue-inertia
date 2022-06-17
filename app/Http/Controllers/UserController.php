<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(){
        $data['title'] = "Halaman Users";
        $data['users'] = User::orderBy('id','desc')->get();
        return Inertia::render('User/Index', $data);
        
    }

    public function show(User $user){
        $data['title'] = "Halaman Detail user";
        $data['user'] = $user;
        return Inertia::render('User/Detail', $data);
    }

    public function create(){
        $data['title'] = "Halaman Tambah user";
        return Inertia::render('User/Create', $data);
    }
    public function edit(User $user){
        $data['title'] = "Halaman Edit User";
        $data['user'] = $user;
        return Inertia::render('User/Edit', $data);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $data = $request->all();
        $user = User::create($data);
        return redirect()->route('users.index')->with('message', 'Data berhasil ditambahkan');
    }
    public function update(Request $request, User $user){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $data = $request->all();
        // $user = User::create($data);
        $user->update($data);
        return redirect()->route('users.index')->with('message', 'Data berhasil diubah');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index')->with('message', 'Data berhasil dihapus');
    }

}
