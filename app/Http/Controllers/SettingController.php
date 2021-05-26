<?php

namespace App\Http\Controllers;
use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function __invoke(Request $request){
        $temp = DataController::find($request->id);
        return view('DataController',['DataController'=>$temp]);
     }
     public function index(Request $request){
         $data = Data::find($request->id);
         return view('data.data',['data' => $data]);
     }
}
