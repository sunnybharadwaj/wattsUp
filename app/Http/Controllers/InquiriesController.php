<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;

class InquiriesController extends Controller
{
    public function index() {
        return Inquiry::all();
    }
    public function store(Request $request) {
//        if(request()->ajax()) {
//            return Response::json(request()->all);
//        }
$name = request('name');
        $inquiry = new Inquiry();
        $inquiry->name = request('name');
        $inquiry->email = request('email');
        $inquiry->phone = request('phone');
        $inquiry->message = request('message');
        $inquiry->save();

//        $to_name = "Blaze Automation";
//        $to_email = "sunny@chakradesign.co";
//
//        $data = array("name"=>"WattsUp.ai", "body" => "Test Email");
//
//        Mail::send("emails.message", $data, function($message) use ($to_name, $to_email) {
//            $message->to($to_email, $to_name)->subject("Laravel Test Mail");
//            $message->from("helper@chakradesign.co", "Test Mail");
//        });

        return view('/thankyou', compact('name'));
    }
}
