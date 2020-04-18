<?php

namespace App\Http\Controllers\projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

/**
 * Class RegisterController
 *
 * @package App\Http\Controllers\projects
 */
class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display()
    {
        return view('projects.register.main');
    }
    
    /**
     * @param \App\Http\Requests\RegisterRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
