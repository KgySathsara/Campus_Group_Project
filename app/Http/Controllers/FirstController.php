<?php

namespace App\Http\Controllers;
use App\Models\First;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    protected $Ft;

    public function __construct()
    {
        $this->Ft = new First();
    }

    public function report(Request $request)
    {
       //dd($request);
       $this->Ft->create($request->all());
       return back();
       
       //return redirect()->route('pages\login');
       //return view('pages\login');
    }
}
