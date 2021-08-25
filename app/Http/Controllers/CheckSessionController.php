<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckSessionController extends Controller
{
    /**
     * Initialize the session check action.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        return response()->json();
    }
}
