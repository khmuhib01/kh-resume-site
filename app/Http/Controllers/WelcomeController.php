<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $site_configure = DB::table('site_config')->first();
        $services = DB::table('services')->get();
        $about_me = DB::table('about_me')->first();
        // dd($site_configure, $services, $about_me);
        return view('welcome', compact('site_configure', 'services', 'about_me'));
    }
}
