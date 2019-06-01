<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class IntakeController extends Controller
{
    public function index()
    {
        return view('intake', ['userId' => Auth::id()]);
    }
}
