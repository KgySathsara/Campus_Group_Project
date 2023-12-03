<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $Reg;
    protected $Evn;

    public function __construct()
    {
        $this->Reg = new Registration();
        $this->Evn = new Event();
    }

    public function home()
    {
        return view('pages\admin\home');
    }

    public function facultyLoding()
    {
        return view('pages\admin\FacultyLoading');
    }

    public function register()
    {
        return view('pages\admin\RegisterAdministrator');
    }

    public function ADstore(Request $request)
    {
       //dd($request);
       $this->Reg->create($request->all());
       //return back();
       //return redirect()->route('pages\admin\login');
       return view('pages\admin\home');



      /* $validatedData = $request->validate([
        'First_Name' => 'required',
        'Last_Name' => 'required',
        // Add validation rules for other fields
    ]);

        $Registration = new Registration;
        $Registration->First_Name = $validatedData['First_Name'];
        $Registration->Last_Name = $validatedData['Last_Name'];
        // Set values for other fields

        $Registration->save();

        return redirect()->back()->with('success', 'Data stored successfully!');*/

    }

    public function note()
    {
        return view('pages\admin\Notice');
    }

    public function todo()
    {
        return view('pages\admin\Todo');
    }


    public function events()
    {
        return view('pages\admin\Events');
    }

   public function ADevent(Request $request)
    {
       //dd($request);
       $this->Evn->create($request->all());
       //return back();
       //return redirect()->route('pages\admin\login');
       return view('pages\admin\home');
    }

    public function accounts()
    {
        return view('pages\admin\Account');
    }

}



