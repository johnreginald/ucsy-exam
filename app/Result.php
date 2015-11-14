<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ResultRequest;

class Result extends Model
{
    protected $table = 'results';

    public function scopeExternal($query){
    	$query->where('external', 1);
    }

    public function scopeSearch($query, ResultRequest $request) {
		if ($request->year == 1) {
			$query->where('roll_no', $request->roll_no)->where('year', $request->year);                
		} else {
			$query->where('roll_no', $request->roll_no)->where('year', $request->year)->where('major', $request->major);                
		}
    }


}
