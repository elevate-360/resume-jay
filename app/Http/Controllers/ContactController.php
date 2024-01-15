<?php

namespace App\Http\Controllers;

use App\Mail\DefaultMessage;
use App\Models\Contact;
use App\Models\Links;
use App\Models\PersonalDetails;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class ContactController extends BaseController
{
    public function contact(Request $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $subject = $request->input("subject");
        $message = $request->input("message");

        $personalData = PersonalDetails::where("pdStatus", "!=", "0")->pluck("pdValue", "pdTitle")->all();
        $links = Links::select("linkAddress", "linkName")->pluck("linkAddress", "linkName")->all();
        $customData = array(
            "subject" => "Thank You!",
            "message" => $subject,
            "to" => $email,
            "name" => $name,
            "address1" => $personalData["address-apt"],
            "address2" => $personalData["address-area"] . ", " . $personalData["address-city"],
            "address3" => $personalData["address-state"] . ", " . $personalData["address-country-short"] . " - " . $personalData["address-pin"] . ".",
            "phone" => $personalData["phone1"],
            "linkedinLink" => $links["Linkedin"],
            "twitterLink" => $links["Twitter"],
            "whatsappLink" => $links["Whatsapp"],
            "instagramLink" => $links["Instagram"],
            "email" => $personalData["email"]
        );

        Mail::to($email)->send(new DefaultMessage($customData));
        $insert = array(
            "name" => $name,
            "email" => $email,
            "subject" => $subject,
            "message" => $message,
            "mailSent" => "1"
        );
        Contact::insert($insert);
        return "OK";
    }
}
