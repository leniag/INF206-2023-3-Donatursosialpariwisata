<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\food;
use App\Models\creates;


class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.user",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data=food::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu",compact("data"));
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request,$id)
    {
        $data=food::find($id);

        
        $gambar=$request->gambar;

        $gambarname =time().'.'.$gambar->getClientOriginalExtension();

                $request->gambar->move('foodgambar', $gambarname);

                $data->gambar=$gambarname;

                $data->nama=$request->nama;

                $data->harga=$request->harga;

                
                $data->description=$request->description;

                $data->save();

                return redirect()->back();


    }


    public function upload(Request $request)
    {
        $data = new food;

        $gambar=$request->gambar;

        $gambarname =time().'.'.$gambar->getClientOriginalExtension();

                $request->gambar->move('foodgambar', $gambarname);

                $data->gambar=$gambarname;

                $data->nama=$request->nama;

                $data->harga=$request->harga;

                
                $data->description=$request->description;

                $data->save();

                return redirect()->back();

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

public function viewcreates()
{
    $data=creates::all();

    return view("project",compact("data"));

    
}



}
