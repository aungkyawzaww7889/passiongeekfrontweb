<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\File;

class TestimonialsController extends Controller
{
    public function index()
    {
        // return "hay testimoniales";
        $testimonials = Testimonial::all();
        $data = [
            'status' => 200,
            'testimonialdata' => $testimonials
        ];
        return response()->json($data,200);
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
           'header'=> 'required',
           'subheader' => 'required',
           'content' => 'required',
           'image' => 'required',
       ]);

       if($validator->fails()){
           $data = [
               'status' => 422,
               'message' => "Validation error"
           ];
       }else{
            $testimonial = new Testimonial();
            $testimonial->header = $request->header;
            $testimonial->subheader = $request->subheader;
            $testimonial->content = $request->content;

            if(file_exists($request['image'])){
                $file = $request['image'];
                $fname = $file->getClientOriginalName();
                $imagenewname = time()."_".$fname;
                $file->move(public_path('assets/img/testimonials/'),$imagenewname);
                $filepath = 'assets/img/testimonials/'.$imagenewname;
                $testimonial->image = $filepath;
            }  

            $testimonial->save();

            $data = [
                'status' => 200,
                'message' => "Testimonial added successfully"
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
        $validator = Validator::make($request->all(),[
            'header'=> 'required',
            'subheader' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
 
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => "Validation error"
            ];
        }else{
             $testimonial = Testimonial::findOrFail($id);
             $testimonial->header = $request->header;
             $testimonial->subheader = $request->subheader;
             $testimonial->content = $request->content;

             if($request->hasFile('image')){
                $path = $testimonial->image;

                if(File::exists($path)){
                    File::delete($path);
                }
            }
 
             if(file_exists($request['image'])){
                 $file = $request['image'];
                 $fname = $file->getClientOriginalName();
                 $imagenewname = time()."_".$fname;
                 $file->move(public_path('assets/img/testimonials/'),$imagenewname);
                 $filepath = 'assets/img/testimonials/'.$imagenewname;
                 $testimonial->image = $filepath;
             }  
 
             $testimonial->save();
 
             $data = [
                 'status' => 200,
                 'message' => "Testimonial updated successfully"
             ];
 
             return response()->json($data,200);
        }
    }


    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $path = $testimonial->image;

        if(File::exists($path)){
            File::delete($path);
        }

        $testimonial->delete();

        $data = [
            'status' => 200,
            'message' => 'Testimonial deleted successfully'
        ];
        return response()->json($data, 200);
    }
}
