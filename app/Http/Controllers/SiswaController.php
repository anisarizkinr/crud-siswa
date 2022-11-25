<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'title' => 'Home',
            'siswa' => Siswa::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create', [
            'title' => 'Tambah Siswa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required'
        ]);
        Siswa::create($validateData);
        Alert::success('Berhasil', 'Siswa berhasil ditambah');
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('show', [
            'title' => 'Detail Siswa',
            'siswa' => $siswa,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('edit', [
            'title' => 'Edit Siswa',
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validateData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required'
        ]);
        Siswa::where('id', $siswa->id)->update($validateData);
        Alert::success('Berhasil', 'Siswa berhasil diubah');
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        Alert::success('Berhasil', 'Siswa berhasil dihapus');
        return redirect('/siswa');
    }
}
