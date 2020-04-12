<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class LoginInterface
 *
 * @package App\Http\Controllers
 */
class LoginInterface extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display(Request $request)
    {
        return view('login_page.main');
    }
}
