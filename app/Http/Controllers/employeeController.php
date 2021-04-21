<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\check;
class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee = DB::table('employees')->get();
       return view('employee\showEmployee' )->with('allEmployees',$employee);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee\ceateEmployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $request->validate([
            'full_name'=>'required',
            'salary'=>'required',
            'password'=>'required',
            'isAdmin'=>'required',
        ]);
        $employee = new employee;
        $employee-> full_name =$request -> get( 'full_name');
        $employee-> salary =$request -> get( 'salary');
        $employee-> password =$request -> get( 'password');
        $employee-> isAdmin =$request -> get( 'isAdmin');
        $employee-> save();
        return redirect()->back();
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = employee::find($id);
        return view('employee\showEmployee' )->with('allEmployees',$employee);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        //
        $employee = employee::find($id);
        return view('employee/editEmployee')-> with('one_employee',$employee) ;
        /*$request->validate([
            'full_name'=>'required',
            'salary'=>'required',
            'password'=>'required',
            'isAdmin'=>'required',
        ]);
        $id-> $request->all();
        return view('employee\showEmployee');*/
        
        /*$employee = employee::fined($id);
        $employee-> full_name =$request -> get( 'full_name');
        $employee-> salary =$request -> get( 'salary');
        $employee-> password =$request -> get( 'password');
        $employee-> isAdmin =$request -> get( 'isAdmin');
        $employee-> save();
        return redirect()->to('employee');*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //$employee = DB::table('employees')->get($id);
        /*$employee = employee::find($id);
        return view('employee/editEmployee')-> with('one_employee',$employee) ;
        */
        $request->validate([
            'full_name'=>'required',
            'salary'=>'required',
            'password'=>'required',
            'isAdmin'=>'required',
        ]);
        DB::table('employees')->where('id',$request->id)->update([
            'full_name'=>$request->full_name,
            'salary'=>$request->salary,
            'password'=>$request->password,
            'isAdmin'=>$request->isAdmin,
        ]);
        return redirect()->to('employee');

       
        /*$employee = employee::fined($id);
        return view('employee/editEmployee')->with('one_employee',$employee);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = employee::find($id);
        $employee->delete();
        return redirect('employee');
        /*  $employee = DB::table('employees')->get($id);
        $employee->delete('employee');
        return redirect()->to('employee');*/
    }
}
