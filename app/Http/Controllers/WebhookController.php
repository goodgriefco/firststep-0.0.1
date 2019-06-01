<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle (Request $request)
    {
        Log::info('webhook hit');
        Log::info($request);
        return;
    }
}
