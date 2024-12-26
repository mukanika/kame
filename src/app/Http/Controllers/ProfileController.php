<?php

namespace App\Http\Controllers;

//use App\Http\Requests\ContactRequest;
//use App\MOdel\Category;
use App\MOdel\Contact;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Data

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
}