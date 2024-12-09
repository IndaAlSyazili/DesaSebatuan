<?php

// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        // Ambil data pengguna untuk admin
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function posts()
    {
        // Ambil data postingan untuk admin
        $posts = Post::all();
        return view('admin.posts', compact('posts'));
    }
}
