<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index(){

        $items = Barang::all();

        return view('home',['items'=>$items]);
    }

    public function store(Request $request){

        $resorce = $request->file('photo');


        $this->validate($request, [

            'nama_barang' => 'required|unique:barangs,nama_barang',
            'harga_beli'  => 'required',
            'harga_jual'  => 'required',
            'stok'        => 'required',
            //'photo'        => 'required|JPG,PNG',


        ]);
        if($resorce == null){

            $barang              = new Barang ;
            $barang->nama_barang = $request->nama_barang;
            $barang->harga_beli  = $request->harga_beli;
            $barang->harga_jual  = $request->harga_jual;
            $barang->stok        = $request->stok;
            $barang->save();


        }else{


            try {
                $name      = $resorce->getClientOriginalName();
                $filename  = pathinfo($name, PATHINFO_FILENAME);
                $extension = $resorce->getClientOriginalExtension();
                $store_as  = $filename . '_' . time() . '.' . $extension;

                $resorce->storeAs('public/avatar/', $store_as);

                $url_file = url('storage/avatar/'.$store_as);

                $barang              = new Barang ;
                $barang->nama_barang = $request->nama_barang;
                $barang->harga_beli  = $request->harga_beli;
                $barang->harga_jual  = $request->harga_jual;
                $barang->stok        = $request->stok;
                $barang->photo       = $url_file;

                $barang->save();
            } catch (\Exception $e) {
                return redirect()->back()->withInput()->with('error-msg', 'Gagal Tambah Batik');
            }


        }



        return redirect()->route('barang');

    }

    public function edit($id){

        $item = Barang::findOrFail($id);

        return view ('edit',['item'=>$item]);

    }

    public function update(Request $request,$id){

        $resorce = $request->file('photo');


        if($resorce == null){


            $set= \App\Barang::updateOrCreate(
                [
                    'id' => $id
                ],
                [
                    'id'          => $id,
                    'nama_barang' => $request->get('nama_barang'),
                    'harga_beli'  => $request->get('harga_beli'),
                    'harga_jual'  => $request->get('harga_jual'),
                    'stok'        => $request->get('stok'),


                ]);

        }  else {

            $name      = $resorce->getClientOriginalName();
            $filename  = pathinfo($name, PATHINFO_FILENAME);
            $extension = $resorce->getClientOriginalExtension();
            $store_as  = $filename . '_' . time() . '.' . $extension;

            $resorce->storeAs('public/avatar/', $store_as);

            $url_file = url('storage/avatar/'.$store_as);

            $set= \App\Barang::updateOrCreate(
                [
                    'id' => $id
                ],
                [
                    'id'          => $id,
                    'nama_barang' => $request->get('nama_barang'),
                    'harga_beli'  => $request->get('harga_beli'),
                    'harga_jual'  => $request->get('harga_jual'),
                    'stok'        => $request->get('stok'),
                    'photo'            => $url_file
                    //  'file' => $url_file
                ]);


        }
        return redirect()->route('barang');


    }

    public function delete($id){

        $item = Barang::findOrFail($id);

        try {
            $item->delete();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error-msg', 'Gagal Delete Akun');
        }

        return redirect()->route('barang');

    }
}
