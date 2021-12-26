<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KrononUser;
use Faker\Provider\ar_JO\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index()
    {
        $items = DB::table('people')->get();
        return view('hello',['items' => $items]);
    }
}
