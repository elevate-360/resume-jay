<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController
{
    public function index()
    {
        if (session()->has("user")) {
            $data = Contact::orderBy("cTime", "desc")->get();
            $count = 0;
            return view('index', compact('data', 'count'));
        } else {
            return redirect()->route('login');
        }
    }

    public function data()
    {
        return view('data');
    }

    public function insertData(Request $request)
    {
    }
}
