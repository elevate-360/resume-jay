<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMessage;
use App\Models\Contact;
use App\Models\Links;
use App\Models\Mails;
use App\Models\PersonalDetails;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class MailsController extends BaseController
{
    public function index()
    {
        if (session()->has("user")) {
            $personalData = PersonalDetails::where("pdStatus", "!=", "0")->pluck("pdValue", "pdTitle")->all();
            $links = Links::select("linkAddress", "linkName")->pluck("linkAddress", "linkName")->all();
            $data = Mails::orderBy("mailDate", "desc")->get();
            $count = 0;
            return view('mails', compact('data', 'count', 'personalData', 'links'));
        } else {
            return redirect()->route('login');
        }
    }

    public function getMail()
    {
        return view('email.reply', ["data" => json_decode($_GET["data"], true)]);
    }
}
