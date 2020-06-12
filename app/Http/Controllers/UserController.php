<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        //$this->middleware('admin')->only('create', 'destroy', 'store');
        //$this->middleware('auth')->except('create', 'destroy', 'store');
        $this->middleware('auth');

    }

    public function suppliers(Request $request) {
        return view('suppliers');
    }

    public function suppliersList(Request $request) {
        $user = Auth::user();
        $suppliers = $user->suppliers()->get();
        return [ 'suppliers' => $suppliers ];
    }
}
