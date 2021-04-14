<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_bisnis = DB::table('businesses')->count();
        $count_contact = DB::table('contacs')->count();
        $count_partner = DB::table('partners')->count();
        $count_user = DB::table('users')->count();
        $contact = DB::table('contacs')->orderBy('created_at','desc')->paginate(10);
        return view('admin.index', ['count_bisnis' => $count_bisnis, 'count_contact' => $count_contact, 'count_partner' => $count_partner, 'count_user' => $count_user, 'contact' => $contact]);
    }
}
