<?php

namespace App\Http\Controllers;

use App\Models\Firstpage;
use Illuminate\Http\Request;

class FirstpagesbladeController extends Controller
{
    
    public function index()
    {
        $firstpages = Firstpage::all();
        return view('showdata',compact('firstpages'));

    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
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
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
