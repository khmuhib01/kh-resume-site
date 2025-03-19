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
        // dd($site_configure, $services);
        return view('welcome');
    }
}
