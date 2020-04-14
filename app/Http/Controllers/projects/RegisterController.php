<?php

namespace App\Http\Controllers\projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

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
        return view('projects.login.main');
    }
    
}
