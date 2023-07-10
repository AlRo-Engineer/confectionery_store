<?php

namespace App\Http\Controllers;

use App\Mail\CareerFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareersController extends Controller
{
    public function index()
    {
        return view('careers');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'comments' => 'nullable',
        ]);

        Mail::to('fastova.engineer@gmail.com')->send(new CareerFormSubmitted($data));

        return back()->with('success', 'Your form has been submitted.');
    }
}
