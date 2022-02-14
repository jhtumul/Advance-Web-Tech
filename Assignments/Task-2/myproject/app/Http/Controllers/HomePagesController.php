<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePagesController extends Controller
{
    //
    public function index()
    {
        return view('/home.index');
    }
    public function login()
    {
        return view('/home.login');
    }
    public function contact()
    {
        $contact = array
        (
            "name" => "Tanvir Ahmed",
            "position" => "Developer",
            "email" => "ta@st.edu"
        );
        $contact = (object) $contact;
        return view('/home.contact')->with('contact', $contact);;
    }


}
