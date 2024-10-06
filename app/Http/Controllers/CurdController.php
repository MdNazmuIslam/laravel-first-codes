<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class CurdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( )
    {
        $student = student::simplepaginate(2);

       return view('/Pages/EqCrud/EqCrud',[ 'student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/Pages/EqCrud/EqCrudAdd');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        student::create([
            'Name' => $request->Name,
            'class' => $request->Class,
            'Subject' => $request->Subject,
            'age' => $request->age
        ]);
        return redirect()->route('EqCrud.index')->with('msg',"Student data add successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = student::where('id',$id)->get();

        return view('/Pages/EqCrud/EqCrudView',['student' => $student]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $sdata = student::where('id',$id)->get();

        return view('/Pages/EqCrud/EqCrudEdit',['student' => $sdata ]);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = student::where('id',$id)->update([
            'Name' => $request->Name,
            'class' => $request->Class,
            'Subject' => $request->Subject,
            'age' => $request->age
        ]);

        return redirect()->route('EqCrud.index')->with('msg','User data update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        student::where('id',$id)->delete();
        return redirect()->route('EqCrud.index')->with('msg', 'User data delete Successfully');
    }
}
