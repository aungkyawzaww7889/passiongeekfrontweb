<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    
    public function index()
    {
       $student = Student::all();
       $data = [
            'status' => 200,
            'student' => $student
       ];
       return response()->json($data,200);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {

            $data =[
                'status' => 422,
                'message'=> $validator->errors()
            ];
            return response()->json($data, 422);

        }else{
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->password = $request->password;
            $student->save();

            $data =[
                'status' => 200,
                'message' => "Data Uploaded Successfully"
            ];

            return response()->json($data,200);
        }
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {

            $data =[
                'status' => 422,
                'message'=> $validator->errors()
            ];
            return response()->json($data, 422);

        }else{
            $student = Student::findOrFail($id);
            $student->name = $request->name;
            $student->email = $request->email;
            $student->password = $request->password;
            $student->save();

            $data =[
                'status' => 200,
                'message' => "Data Update Successfully"
            ];

            return response()->json($data,200);
        }
    }

   
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        $data =[
            'status' => 200,
            'message' => "Data Deleted Successfully"
        ];
        return response()->json($data,200);
    }
}
