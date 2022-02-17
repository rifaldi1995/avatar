<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawancontroller extends Controller
{
    public function index(request $request)
    {
        if($request->has('cari')){
            $data_karyawan = \App\karyawan::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else
        {
            $data_karyawan =\App\karyawan::all();    
        }
        return view('karyawan.index',['data_karyawan'=> $data_karyawan]);
    }
    public function create(request $request)
    {
    \App\karyawan::create($request->all());
    return redirect('/karyawan')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $karyawan = \App\karyawan::find($id);
        return view('karyawan/edit',['karyawan'=> $karyawan]);
    } 
    public function update(request $request,$id)
    {
        $karyawan = \App\karyawan::find($id);
        $karyawan->update($request->all());
        return redirect('/karyawan')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $karyawan = \App\karyawan::find($id); 
        $karyawan->delete();
        return redirect('/karyawan')->with('sukses','Data berhasil dihapus');
    }       
    
}
