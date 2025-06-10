<?php

namespace App\Http\Controllers;

use App\Models\komik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function login(){
        return view('admin.login');
    }

    function homeAdmin(){
        $komik = komik::all();
        return view('admin.homeAdmin', compact('komik'));
    }

    function postLogin(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();
            return redirect()->route('homeAdmin')->with('notifikasi','selamat datang: '.$user->nama );
        }
        return redirect()->route('login')->with('notifikasi','username atau password SALAH !!!!');
    }
    function tambahKomik(){
        return view('admin.tambahKomik');   
    }
    function postTambahKomik(Request $request){
        $request->validate([
            'judul_komik' =>'required',
            'cover_komik'=>'required',
            'sinopsis'=>'required',
            'author'=>'required',
            'tahun'=>'required',
            'genre'=>'required'
        ]);
        $user = Auth::user();
        komik::create([
            'judul_komik' =>$request->judul_komik,
            'cover_komik'=>$request->cover_komik->store('img'),
            'sinopsis'=>$request->sinopsis,
            'author'=>$request->author,
            'tahun'=>$request->tahun,
            'genre'=>$request->genre,
            'user_id'=>$user->id
        ]);
        return redirect()->route('homeAdmin')->with('notifikasi','Data Berhasil Ditambahkan');
    }
    function editKomik(komik $komik){
        return view('admin.editKomik',compact('komik'));
    }
    function postEditKomik(komik $komik, Request $request){
        $data = $request->validate([
            'judul_komik' =>'required',
            'cover_komik'=>'required',
            'sinopsis'=>'required',
            'author'=>'required',
            'tahun'=>'required',
            'genre'=>'required'
        ]);

        $data['cover_komik']=$request->cover_komik->store('img');
        $komik->update($data);
        return redirect()->route('homeAdmin')->with('notifikasi','Data Berhasil Diedit');
    }
    function hapusKomik(komik $komik){
        $komik->delete();
        return redirect()->route('homeAdmin')->with('notifikasi','Data Berhasil Dihapus');
    }

}
