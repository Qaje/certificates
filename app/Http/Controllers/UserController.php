<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Yajra\DataTables\DataTables;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();        
        return view('template',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('id','DESC')->get();
        return view('usertable',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            $user = new User();
            $user->name  = $request->name; 
            $user->email = $request->email; 
            $user->password = Hash::make($request->password);  
            $user->save();
        }catch(Exception $e){
            return "<div style='backgoround-color:red'> ERROR</div>";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         $user = User::find($id);
         return $user;
         return view('user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::find($request["id"]);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
            $user = User::find($request->id);
            $user->name  = $request->name; 
            $user->email = $request->email; 
            $user->password = Hash::make($request->password);  
            return $this->create();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
