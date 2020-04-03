<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class GetUser
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @return mixed
     */
    public function handle($request)
    {
        return $request->user();
    }
}
