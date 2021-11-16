<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    $users = User::all();
        return view('dashboard.profile.index', compact('users'));
}
