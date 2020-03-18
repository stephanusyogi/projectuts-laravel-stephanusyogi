<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camping;
use DB;

class CampingController extends Controller
{
    public function index()
    {
        $barang = Camping::all(); //menyeleksi data dr DB
        return view("camping.index", compact("barang")); //proses passing data dr controller ke view

    }


    public function create()
    {
        return view("camping.create");
    }


    public function store(Request $request)
    {

        

      Camping::create([
            'id' => $request->id,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'harga_barang' => $request->harga_barang]);

      return redirect()->route("camping.index");
      
    }

    public function edit($id)
    {
        $data = Camping::find($id);
        return view("camping.edit", compact("data"));
    }

    public function update(Request $request, $id)
    {
        Camping::where("id", $id)->update($request->except("_token"));
        return redirect()->route("camping.index");
    }

    public function destroy($id)
    {
        Camping::where("id", $id)->delete();
        return redirect()->route("camping.index");
    }
}
