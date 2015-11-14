<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Result;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResultRequest;

class ResultController extends Controller
{
    public function home() {
	return view('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResultRequest $request)
    {
        if($request->external) {
            $data = Result::search($request)->external()->get();            
        } else {        
            $data = Result::search($request)->where('external', 0)->get();          
        }

        return view('message', compact('data'));  
    }

    public function term() {
        return view('term');
    }

    public function api() {
        return response()->json(Result::all());
    }
}
