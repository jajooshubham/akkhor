<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Requests;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('backend.inc.index');
    }
}
