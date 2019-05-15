<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use Auth;
use App\Models\User;

class LandingController extends Controller
{
    public function index()
    {
        JavaScript::put([
            'userName' => Auth::user()->name ?? null,
        ]);

        return view('landing');
    }
}
