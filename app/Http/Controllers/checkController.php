<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\check;
use App\Models\employee;
class checkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Check = DB::table('Checks')->get();
        return view('check\showCheck') ->with('allCheck',$Check);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('check\createCheck')-> with('one_employee',$employee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
        //
        $request->validate([
            'entry'=>'required',
            'Leaving'=>'required',
            
        ]);
        $check = new check();
        $check-> entry =$request -> get( 'entry');
        $check-> emloyee_id ->get('emloyee_id');
        $check-> save();
        return redirect()->back();
        $id= $request->all();
        if ($request->isAdmin==1){
        return redirect()->to('employee');
        }
        elseif ($request->isAdmin==0){
        return redirect()->to('employee/',$one_employee->id);
        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $check = check::find($id);
        return view('check\editcheck')-> with('one_check',$check)-> with('one_employee',$employee) ;
        /*$check = check::fined($id);
        $check-> entry =$request -> get( 'entry');
        $check-> Leaving =$request -> get( 'Leaving');
        $check-> save();
        return redirect()->to('check');*/

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
       /* $check = check::fined($id);
        return redirect()->to('check')->with('one_check',$check);*/
        $request->validate([
            'entry'=>'required',
            'Leaving'=>'required',
            'employee_id'=>'required',
        ]);
        $id-> $request->all();
        if ($request->isAdmin==1){
        return redirect()->to('employee');
        }
        elseif ($request->isAdmin==0){
        return redirect()->to('employee',$one_employee->id);
        }
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
        $check = check::fined($id);
        $check->delete();
        return redirect()->to('check');
    }
}
