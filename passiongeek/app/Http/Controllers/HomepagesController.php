<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomepagesController extends Controller
{
    public function index()
    {
        $homepages = Homepage::all();
        return view('homepages.index',compact('homepages'));
    }

    public function create()
    {
        return view('homepages.create');
    }


    public function store(Request $request)
    {
        $homepage = new Homepage();
        $homepage->title = $request['title'];
       
        if(file_exists($request['image'])){
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            // $imagenewname = uniqid($request->id).$user_id.$fname;
            // $file->move(public_path('assets/img/roles/'),$imagenewname);
            $file->move(public_path('assets/img/roles/'),$fname);

            // $filepath = 'assets/img/roles/'.$imagenewname;
            $filepath = 'assets/img/roles/'.$fname;
            $homepage->image = $filepath;

        }   
        $homepage->save();
        return redirect(route('homepages.index'));
    }


    public function show(string $id)
    {
        $homepages = Homepage::findOrFail($id);
        return view('homepages.show',compact('homepages'));
    }


    public function edit(string $id)
    {
        $homepages = Homepage::findOrFail($id);
        return view('homepages.edit',compact('homepages'));

        // return view('homes.edit');
    }


    public function update(Request $request, string $id)
    {
        $homepage = Homepage::findOrFail($id);
        $homepage->title = $request['title'];

        if($request->hasFile('image')){
            $path = $homepage->image;

            if(File::exists($path)){
                File::delete($path);
            }
        }


        if(file_exists($request['image'])){
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            // $imagenewname = uniqid($request->id).$user_id.$fname;
            // $file->move(public_path('assets/img/roles/'),$imagenewname);
            $file->move(public_path('assets/img/roles/'),$fname);

            // $filepath = 'assets/img/roles/'.$imagenewname;
            $filepath = 'assets/img/roles/'.$fname;
            $homepage->image = $filepath;

        }   

        $homepage->save();
        return redirect(route('homepages.index'));
    }


    public function destroy(string $id)
    {
        $homepage = Homepage::findOrFail($id);

        // Remove Old Single Image 
        $path = $homepage->image;

        //public file ထဲက path လမ်းကြောင်းထဲမှာ ရှိတဲ့ image တေွကိုဖျက်ချင်ရင်သုံး 
        if(File::exists($path)){
            File::delete($path);
        }

        $homepage->delete();

        // back ဆိုတာ ဒီ page ကိုပဲပြန်လာမယ်လို့ပြောတာ
        return redirect()->back();
    }
}
