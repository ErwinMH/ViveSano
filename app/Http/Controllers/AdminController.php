<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('admin.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }



}
