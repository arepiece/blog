<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('home');
    }
    
    public function Dashboard()
    {
        
        return view('Dashboard.index');
    }
    
    public function employee()
    { 
        $lesens = DB::table('employee')->get();
//        dd($lesens);
        return view('Dashboard.employee', compact('lesens'));
    }
    
    public function deleteemployee($id)
    { 
        DB::table('employee')->where('id', $id)
                ->delete();
        return redirect('employee');
    }
    
    public function addemployee(Request $request)
    {
        $input = $request->all();       
        $image = $request->file('avatar');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        
        DB::table('employee')->insert([
            'name' => $input['name2'],
            'age' => $input['age'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'joindate' => $input['datejoin'],
            'role' => $input['designation'],
            'salary' => $input['salary'],
            'avatar' => $imageName,
        ]); 
        return view('Dashboard.employee');
    }
}
