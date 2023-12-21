<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Facts;
use App\Models\Images;
use App\Models\Links;
use App\Models\PersonalDetails;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class UpdateController extends BaseController
{
    public function index()
    {
        if (session()->has("user")) {
            $personalDetails = PersonalDetails::all();
            $images = Images::where("imgStatus", "!=", "0")->pluck("imgFile", "imgTitle")->all();
            $links = Links::orderBy("linkDownload", "asc")->get();
            $facts = Facts::all();
            $skills = Skills::all();
            $education = Education::orderBy("eduEndDate", "desc")->get();
            $experience = Experience::orderBy("expEndDate", "desc")->get();
            return view('update', compact('personalDetails', 'images', 'links', 'facts', 'skills', 'education', 'experience'));
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
