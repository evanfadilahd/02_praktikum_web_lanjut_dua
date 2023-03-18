<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        echo"<br> Selamat Datang";
    }

    public function about()
    {
        echo"<br> Nama : Evan Fadhilah Dzulfikar";
        echo"<br> NIM : 2141720167";
    }

    public function articles($id)
    {
        echo"<br> Halaman Artikel ".$id;
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
