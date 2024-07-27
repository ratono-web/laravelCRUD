<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('id','asc')->paginate(5);
        return view('mahasiswa.index',compact('mahasiswas'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'namaMahasiswa'=>'required',
            'nimMahasiswa' => 'required',
            'angkatanMahasiswa'=>'required',
            'judulskripsiMahasiswa' => 'required',
            'pembimbing1'=>'required',
            'pembimbing2' => 'required',
            'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('gambarMahasiswa');
        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,time() . '_' .$file->getClientOriginalName());
        
        $data = $request->all();
        $data['gambarMahasiswa'] = time() . '_' . $file->getClientOriginalName();
        Mahasiswa::create($data);
        return redirect()->route('mahasiswa.index')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
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
        $request->validate([
            'namaMahasiswa'=>'required',
            'nimMahasiswa' => 'required',
            'angkatanMahasiswa'=>'required',
            'judulskripsiMahasiswa' => 'required',
            'pembimbing1'=>'required',
            'pembimbing2' => 'required',
            'gambarMahasiswa' => 'image|mimes:jpg,png,jpeg'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->namaMahasiswa = $request->get('namaMahasiswa');
        $mahasiswa->nimMahasiswa = $request->get('nimMahasiswa');
        $mahasiswa->angkatanMahasiswa = $request->get('angkatanMahasiswa');
        $mahasiswa->judulskripsiMahasiswa = $request->get('judulskripsiMahasiswa');
        $mahasiswa->pembimbing1 = $request->get('pembimbing1');
        $mahasiswa->pembimbing2 = $request->get('pembimbing2');
        if ($request->hasFile('gambarMahasiswa')) {
            // Hapus gambar lama jika ada
            if ($mahasiswa->gambarMahasiswa && File::exists(public_path('data_file/' . $mahasiswa->gambarMahasiswa))) {
            File::delete(public_path('data_file/' . $mahasiswa->gambarMahasiswa));
                }

            // Simpan gambar baru
            $file = $request->file('gambarMahasiswa');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('data_file', $filename);
            
            // Simpan nama file ke database
            $mahasiswa->gambarMahasiswa = $filename;
            }
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data berhasil diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        File::delete(public_path('data_file/' . $mahasiswa->gambarMahasiswa));
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }

    public function api()
    {
        $mahasiswas = Mahasiswa::orderBy('id','asc')->paginate(8);
        return response()->json($mahasiswas);
    }

    public function apiShow($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return response()->json($mahasiswa);
    }
}
