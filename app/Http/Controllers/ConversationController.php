<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index(){
        $users = User::select('name', 'id')->where('id', '!=', Auth::user()->id)->get();
        return view('conversation/index', compact('users'));

    }
    public function show(User $user){
        $users = User::select('name', 'id')->where('id', '!=', Auth::user()->id)->get();
        return view('conversation/show', compact('users', 'user'));
    }
}
