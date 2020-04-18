<?php

namespace App\Http\Controllers\projects;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Class LoginController
 *
 * @package App\Http\Controllers
 * @mixin \Illuminate\Auth\EloquentUserProvider
 */
class LoginController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display(Request $request)
    {
        return view('projects.login.main');
    }
    
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $user = User::where(
            'name', '=', $request['login']
        )
                    ->first();
        
        if ($user != null && Hash::check($request['password'], $user['password'])) {
            return 'You are now connected';
        }
        
        return back()->withErrors('Invalid username or password.');
    }
}
