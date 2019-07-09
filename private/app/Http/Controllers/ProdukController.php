<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produk::all();
        return view('admin.produk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function addProduk()
    {
        return view('admin.add_produk');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $uploadfile = $request->file('file');
       $pdfname = time() . str_random(22) . '.' . $uploadfile->getClientOriginalExtension();
       $uploadfile->move(public_path('./public/fileupload/'), $pdfname);

    //    $id = Auth::user()->id;
       $data = new Produk;
    //    $data->id = $id;
       $data->nomor = $request->nomor;
       $data->tahun = $request->tahun;
       $data->tentang = $request->tentang;
       $data->file = $pdfname;
       $data->konten = $request->konten;
       $data->save();
       return redirect('admin/produk')->with('alert-succes','Tambah Produk Berhasil');

    //   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
