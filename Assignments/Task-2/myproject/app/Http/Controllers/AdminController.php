<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin()
    {
        $course = array
        (
            "name" => "Programing with Python",
            "instructor" => "Devid Dobrik",
            "duration" => "4 Months",
            "start" => "10<sup>th</sup> February 2022"
        );
        $course = (object) $course;
        return view('admin.admin_home')->with('course', $course);
    }

}
// here