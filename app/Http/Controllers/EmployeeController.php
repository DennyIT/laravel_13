<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Position;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Employee::paginate(5);
        //$data = Employee::all();
        return view('employee.home',[
         'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('employee.create');
        $position = Position::all();
        return view('employee.create', [
         'position'=>$position
         ]);
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
            'name' => 'required|unique:App\Employee,name|min:5',
            'alamat' =>'required|min:5|max :200',
            'phone' => 'required|unique:App\Employee,phone|min:5',
            'email' => 'required|email:rfc,dns',

        ]);

        //penamaan file
        $filename = 'employe-'.$request->name.'-'.$request->id.time().'.png';
        //dd($filename);
        $request->file('picture')->storeAs('public/employee',$filename);
        Employee::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'email' => $request->email,
            'position_id' => $request->position_id,
            'picture' =>$filename,
          
        ]);


        return redirect('/employee');
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
        $data = Employee::Where('id','=',$id)->first();
        $position =  Position::all();
        return view('employee.edit', [
         'data'=>$data,
         'position'=>$position
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([ 
            'name' => 'required|unique:App\Employee,name|min:5',
           
        ]);

        if ($request->picture ){

            //penamaan file
            $filename = 'employe-'.$request->name.'-'.$request->id.time().'.png';
            
            //storage server
           
           //dd($filename);
            $request->file('picture')->storeAs('public/employee',$filename);
            
            $employe = Employee::where('id','=',$request->id)->first();
            Storage::delete('public/employee/'. $employe->picture);
            
            Employee::Where('id','=', $request->id)->update([
                'name'=>$request->name,
                'alamat' =>$request->alamat,
                'phone' => $request->phone,
                'email' => $request->email,
                'position_id' => $request->position_id,
                'picture' =>  $filename
            ]);

           


        }
        else{

            Employee::Where('id','=', $request->id)->update([
                'name'=>$request->name,
                'alamat' =>$request->alamat,
                'phone' => $request->phone,
                'email' => $request->email,
                'position_id' => $request->position_id,
            ]);

        }
       
         return redirect('/employee');

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

        $data = Employee::find($id);

        $data->delete();
        return redirect('/employee');

    }
}
