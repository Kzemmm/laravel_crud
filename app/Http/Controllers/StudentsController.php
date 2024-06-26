<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function store(Request $request){

        Students::create([
            'first_name' =>$request->first_name,
            'last_name'=>$request->last_name,
            'age'=>$request->age,
            'email'=>$request->email,
            'course'=>$request->course,
        ]);
            return response()->json('Successfully Created');
    }

    public function fetch(){
        return response()->json(Students::latest()->get());
    }

    public function fetchStudent(string $id){
        return response()->json(Students::whereId($id)->first());
    }

    public function update(Request $request, string $id){
        $user = Students::whereId($id)->first();

        $user->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'course'=>$request->course
        ]);
        return response()->json('Updated Successfully');
    }

    public function delete($id){
       {
        Students::whereId($id)->first()->delete();

        return response()->json('Successfully deleted');
       }
    }
}
