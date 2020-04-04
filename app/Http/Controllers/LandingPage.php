<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class LandingPage
 *
 * @package App\Http\Controllers
 */
class LandingPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     *
     * @return Factory|View
     */
    public function display(Request $request)
    {
        return view('landing_page.main');
    }

    /**
     * @param ContactForm $request
     * @return JsonResponse
     */
    public function contactForm(ContactForm $request)
    {

        $errors = $request->errors;

        if (isset($errors)) {
            return response()->json($errors, 400);
        }

        return response()->json("Thanks for submitting your message", 200);

    }
}
