<?php

namespace App\Http\Controllers;
use App\Kategori;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Kategori::all();
        return view('admin.kategori', compact('data'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nama_kategori' => $request->nama_kategori
        ];
        $simpan = Kategori:: create($data);
        // $kategori = new Kategori;
        // $kategori->nama_kategori = $request->nama_kategori;

//        $kategori->save();
if ($simpan)
return redirect()->back()->withSuccess('Sukses tambah data');

return redirect()->back()->withError('Gagal tambah data');   

        // if ($kategori->save()) {
        //     Alert::success('Sukses Update', 'Sukses Update Data');
        //     return redirect('admin/kategori');
        // }

        // Alert::success('Gagal Update', 'Gagal Update Data');
        // return redirect('admin/kategori');


       // return redirect('admin/kategori')->with('alert-succes','Tambah Kategori Berhasil');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kategori::find($id);
        return view('admin.kategori', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kategori::find($id);
        return view('admin.edit_kategori', compact('data'));
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
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();
        return redirect('admin/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kategori::find($id);
        $data->delete();

        return redirect('admin/kategori');
    }

    public function hapus($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('admin/kategori');
    }
}
