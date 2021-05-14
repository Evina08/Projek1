<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use App\Data;

use Illuminate\Support\Facades\Session;

class DataController extends Controller
{
    public function data()
    {
        $dt = Data::where('users',\Auth::user()->id)->first();
        $cek = Data::where('users',\Auth::user()->id)->count();
        return view('dataUser', compact('dt','cek'));
    }
    public function store(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'no_hp'=>'required',
            'no_hp_orangtua'=>'required',
            'jenis_kelamin'=>'required',
            'agama'=>'required',
            'nik'=>'required',
            'avatar'=>'required'
        ]);
 
        $data['users'] = $id;
        $data['name'] = $request->name;
        $data['no_hp'] = $request->no_hp;
        $data['no_hp_orangtua'] = $request->no_hp_orangtua;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['agama'] = $request->agama;
        $data['nik'] = $request->nik;
        $data['avatar'] = $request->avatar;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
 
        Data::insert($data);
 
        return redirect()->back()->with('success','Data Diri berhasil diisi');
    }
 
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'no_hp'=>'required',
            'no_hp_orangtua'=>'required',
            'jenis_kelamin'=>'required',
            'agama'=>'required',
            'nik'=>'required',
            'avatar'=>'required'
        ]);
 
        // $data['users'] = $id;
        $data['users'] = $id;
        $data['name'] = $request->name;
        $data['no_hp'] = $request->no_hp;
        $data['no_hp_orangtua'] = $request->no_hp_orangtua;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['agama'] = $request->agama;
        $data['nik'] = $request->nik;
        $data['avatar'] = $request->avatar;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
 

        Data::where('users',$id)->update($data);
 
        // Session::flash('sukses','Data berhasil diupdate');
 
        return redirect()->back()->with('success','Data Diri Siswa  diupdate');
    }
}
