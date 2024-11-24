<?php

namespace App\Http\Controllers;

use App\Models\Firstpage;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\File;

class FirstpagesController extends Controller
{
    
    public function index()
    {
        $firstpage = Firstpage::all();
        $data = [
            'status' => 200,
            'firstpagedata' => $firstpage
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
            'title' => 'required',
            'image' => 'required'
        ]);

        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => $validator->errors()
            ];
            return response()->json($data, 422);
        }else{
            $firstpage = new Firstpage();
            $firstpage->title = $request->title;
            
            if(file_exists($request['image'])){
                $file = $request['image'];
                $fname = $file->getClientOriginalName();
                $imagenewname = time()."_".$fname;
                $file->move(public_path('assets/img/firstpages/'),$imagenewname);
                $filepath = 'assets/img/firstpages/'.$imagenewname;
                $firstpage->image = $filepath;
            }  

            $firstpage->save();

            $data = [
                'status' => 200,
                'message' => 'Firstpage created successfully'
            ];
            return response()->json($data, 200);
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
            'title' => 'required',
            'image' => 'required'
        ]); 

        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => $validator->errors()
            ];
            return response()->json($data, 422);
        }else{
            $firstpage = Firstpage::findOrFail($id);
            $firstpage->title = $request->title;

            // Remove Old Single Image
            if($request->hasFile('image')){
                $path = $firstpage->image;

                if(File::exists($path)){
                    File::delete($path);
                }
            }

            if(file_exists($request['image'])){
                $file = $request['image'];
                $fname = $file->getClientOriginalName();
                $imagenewname = time()."_".$fname;
                $file->move(public_path('assets/img/firstpages/'),$imagenewname);
                $filepath = 'assets/img/firstpages/'.$imagenewname;
                $firstpage->image = $filepath;
            }  

            $firstpage->save();

            $data = [
                'status' => 200,
                'message' => 'Firstpage Updated successfully'
            ];
            return response()->json($data, 200);
        }
    }


    public function destroy(string $id)
    {
        $firstpage = Firstpage::findOrFail($id);
        $path = $firstpage->image;

        if(File::exists($path)){
            File::delete($path);
        }

        $firstpage->delete();
        $data = [
            'status' => 200,
            'message' => 'Firstpage deleted successfully'
        ];
        return response()->json($data, 200);
    }
}
