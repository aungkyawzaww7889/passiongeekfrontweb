<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Firstpage;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\File;

class FirstpagesController extends Controller
{
    
    public function index()
    {
        $firstpages = Firstpage::all();
        $data = [
            'status' => 200,
            'firstpagedata'=>$firstpages
        ];
        return response()->json($data,200);

    }

  
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'captionname' => 'required',
            'image' => 'required'
        ]);

        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => $validator->errors()
            ];

            return response()->json($data,422);
        }else{
            $firstpage = new Firstpage();
            $firstpage->captionname = $request->captionname;

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
    
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'captionname' => 'required',
            'image' => 'required'
        ]);

        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => $validator->errors()
            ];

            return response()->json($data,422);
        }else{
            $firstpage = Firstpage::findOrFail($id);
            $firstpage->captionname = $request->captionname;

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
                'message' => 'Firstpage updated successfully'
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
