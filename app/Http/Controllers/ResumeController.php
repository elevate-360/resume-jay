<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Facts;
use App\Models\Images;
use App\Models\Links;
use App\Models\PersonalDetails;
use App\Models\Skills;
use Illuminate\Routing\Controller as BaseController;

class ResumeController extends BaseController
{
    public function index()
    {
        $personalDetails = PersonalDetails::where("pdStatus", "!=", "0")->pluck("pdValue", "pdTitle")->all();
        $images = Images::where("imgStatus", "!=", "0")->pluck("imgFile", "imgTitle")->all();
        $links = Links::all();
        $facts = Facts::all();
        $skills = Skills::all();
        $education = Education::orderBy("eduEndDate", "desc")->get();
        $experience = Experience::orderBy("expEndDate", "desc")->get();
        return view('resume', compact('personalDetails', 'images', 'links', 'facts', 'skills', 'education', 'experience'));
    }
}
