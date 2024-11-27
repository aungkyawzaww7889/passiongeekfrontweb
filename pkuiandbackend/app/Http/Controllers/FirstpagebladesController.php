<?php

namespace App\Http\Controllers;

use App\Models\Firstpage;
use Illuminate\Http\Request;

class FirstpagebladesController extends Controller
{
    
    public function index(){
        $firstpages = Firstpage::all();
        return view('firstpage/firstpageindex',compact('firstpages'));
    }

}
