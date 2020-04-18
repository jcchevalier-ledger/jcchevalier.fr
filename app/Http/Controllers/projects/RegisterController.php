<?php

namespace App\Http\Controllers\projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display(Request $request)
    {
        return view('projects.register.main');
    }
    
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated['name'] = $validated['login'];
        unset($validated['login']);
        $validated['password'] = Hash::make($validated['password']);
        $newUser = new User($validated);
        $newUser->save();
    
        return view('projects.login.main');
    }
    
}
