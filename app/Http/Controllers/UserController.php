<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use App\Models\gambar_chapter;
use App\Models\komik;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function home(){
        $komik = komik::all();
        return view('pembaca.home', compact('komik'));
    }
    function detailPembaca(komik $komik){
        $chapter = chapter::where('komik_id', $komik->id)->get();
        return view('pembaca.detailPembaca',compact('komik','chapter'));
    }
    function gambar(chapter $chapter){
        $gambar = gambar_chapter::where('chapter_id', $chapter->id)->get();
        return view('pembaca.baca', compact('gambar'));
    }
}
