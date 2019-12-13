<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;

class InquiriesController extends Controller
{
    public function index() {
        return Inquiry::all();
    }
    public function store() {
        $inquiry = new Inquiry();
        $inquiry->name = request('name');
        $inquiry->email = request('email');
        $inquiry->phone = request('phone');
        $inquiry->message = request('message');
        $inquiry->save();
        return Inquiry::all();
    }
}
