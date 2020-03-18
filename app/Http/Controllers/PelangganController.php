<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use DB;
class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all(); //menyeleksi data dr DB
        return view("pelanggan.index", compact("pelanggan")); //proses passing data dr controller ke view

    }


    public function create()
    {
        return view("pelanggan.create");
    }



    public function store(Request $request)
    {

        

      Pelanggan::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp]);

      return redirect()->route("pelanggan.index");
      
    }



    public function edit($id)
    {
        $data = Camping::find($id);
        return view("pelanggan.edit", compact("data"));
    }

    public function update(Request $request, $id)
    {
        Pelanggan::where("id", $id)->update($request->except("_token"));
        return redirect()->route("pelanggan.index");
    }


    public function destroy($id)
    {
        Camping::where("id", $id)->delete();
        return redirect()->route("pelanggan.index");
    }
}
