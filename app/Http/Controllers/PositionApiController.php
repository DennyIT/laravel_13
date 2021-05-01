<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Position;
class PositionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Position::all();
        return response()->json([
            'code' => 200,
            'message' => 'success!',
            'value' => $data
        ]);

        
    }

   
    public function create(Request $request)
    {
        //
        Position::create([
            'name' => $request->name,
            'department_id' => $request->department_id
                     
        ]);
        return response()->json([
            'code' => 201,
            'message' => 'created success!'
           
        ]);
    }

    
    public function store(Request $request)
    {
        //
        $position = New Position;
        $position->name = $request->name;
        $position->save();

        return response()->json([
            'code' => 201,
            'message' => 'success!'
           
        ]);
    }

    
    public function edit(Request $request, $id)
    {
        //

        Position::where('id','=',$id)->update([
            'name' => $request->name,
            'department_id' => $request->department_id

        ]);

        
        return response()->json([
            'code' => 201,
            'message' => 'Update success!'
           
        ]);
    }

    
    public function destroy($id)
    {
        //
        Position::destroy($id);
        
        return response()->json([
            'code' => 201,
            'message' => 'Delete success!'
           
        ]);


    }
}
