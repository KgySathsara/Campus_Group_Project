<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;


class LoginController extends Controller
{

    protected $task;

    public function __construct()
    {
        $this->task =new Login();
    }

    public function login()
    {
        return view('pages\login');
    }

    public function signup()
    {
        return view('pages\sign');

    }

    public function store(Request $request)
    {
       //dd($request);
       $this->task->create($request->all());
      // return back();
       //return redirect()->route('pages\login');
       return view('pages\login');
    }

    public function main()
    {
        return view('pages\admin\main');
    }
}
