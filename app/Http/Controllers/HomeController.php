<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\food;
use App\Models\donasi;




class HomeController extends Controller
{
    public function index()
    {

        $data=food::all();
        return view("home", compact("data"));
    }






    public function redirects()
    {

        $data=food::all();

        $usertype= Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('home', compact('data'));
        }
    }



    public function creates(Request $request)
    {
        $data = new creates;
    
                $data->name=$request->name;
    
                $data->email=$request->email;
    
                $data->phone=$request->phone;
    
                $data->judul=$request->judul;
    
                $data->deskripsi=$request->deskripsi;
    
                $data->gambar=$request->gambar;
    
    
                $data->save();
    
                return redirect()->back();
    
    }
    
    public function viewcreates2()
    {
        $data=creates::all();
    
        return view("project",compact("data"));
    
        
    }


    public function donasi(Request $request)
{
    $data = new donasi;

            $data->nama=$request->nama;

            $data->bank=$request->bank;

            $data->norek=$request->norek;

            $data->jumlah=$request->jumlah;


            $data->save();

            return redirect()->back();
}
}
