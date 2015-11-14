<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Result;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResultRequest;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResultRequest $request)
    {
        if($request->external) {

            $data = Result::search($request)->external()->get();            
            return view('message', compact('data'));

        } else {
           
            $data = Result::search($request)->get();
            return view('message', compact('data'));            

        }
    }

    public function term() {
        return view('term');
    }

}