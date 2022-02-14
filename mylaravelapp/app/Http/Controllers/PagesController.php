<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PagesController extends Controller
{
    //
    public function login()
    {
        return view('home.login');
    }
    public function index()
    {
        return view('home.index');
    }
    public function register()
    {
        return view('home.register');
    }
    public function registerSubmit(Request $req)
    {
        // $req->validate(
        //     [
        //         'name' => 'required|regex:/^[A-Z a-z]+$/',
        //         'uname' => 'required|min:5|max:20|starts_with:U,u,user',
        //         'id' => 'required|regex:/^[1-9]{1}[0-9]{1}-[1-9]{1}[0-9]{4}-[1-3]{1}$/',
        //         'password' => 'required',
        //         'conf_password' => 'required|same:password'
        //     ],
        //     [
        //         'uname.required' => 'please provide username',
        //         'uname.min' => 'username should be atleast 5 characters',
        //         // 'uname.max' => 'username should not exceed 20 characters'
                
        //     ]
        // );
        $this->validate($req,
            [
                'name' => 'required|regex:/^[A-Z a-z]+$/',
                'uname' => 'required|min:5|max:20|starts_with:U,u,user',
                'id' => 'required|regex:/^[1-9]{1}[0-9]{1}-[1-9]{1}[0-9]{4}-[1-3]{1}$/',
                'password' => 'required',
                'conf_password' => 'required|same:password'
            ],
            [
                'uname.required' => 'please provide username',
                'uname.min' => 'username should be atleast 5 characters',
                'uname.max' => 'username should not exceed 20 characters'
            ]
        );
        //end of validation
        $st = new Student();
        $st->name = $req->name;
        $st->user_id = $req->id;
        $st->username = $req->uname;
        $st->password = $req->password;
        $st->save();
        return "<h1>form submitted with $req->uname and $req->password</h1>";
    }
    public function loginSubmit(Request $req)
    {
        // $req->validate(
        //     [
        //         'name' => 'required|regex:/^[A-Z a-z]+$/',
        //         'uname' => 'required|min:5|max:20|starts_with:U,u,user',
        //         'id' => 'required|regex:/^[1-9]{1}[0-9]{1}-[1-9]{1}[0-9]{4}-[1-3]{1}$/',
        //         'password' => 'required',
        //         'conf_password' => 'required|same:password'
        //     ],
        //     [
        //         'uname.required' => 'please provide username',
        //         'uname.min' => 'username should be atleast 5 characters',
        //         // 'uname.max' => 'username should not exceed 20 characters'
                
        //     ]
        // );
        $this->validate($req,[
            'name' => 'required|regex:/^[A-Z a-z]+$/',
                'uname' => 'required|min:5|max:20|starts_with:U,u,user',
                'id' => 'required|regex:/^[1-9]{1}[0-9]{1}-[1-9]{1}[0-9]{4}-[1-3]{1}$/',
                'password' => 'required',
                'conf_password' => 'required|same:password'
        ],
        [
            'uname.required' => 'please provide username',
                'uname.min' => 'username should be atleast 5 characters',
                'uname.max' => 'username should not exceed 20 characters'
        ]);
        return "<h1>form submitted with $req->uname and $req->password</h1>";
    }
}
