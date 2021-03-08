<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store()
    {
        $siswa = new Siswa;
        $siswa->nama = request()->input('nama');
        $siswa->tanggal_lahir = request()->input('tanggal_lahir');
        $siswa->tempat_lahir = request()->input('tempat_lahir');
        $siswa->jenis_kelamin = request()->input('jenis_kelamin');
        $siswa->alamat = request()->input('alamat');
        $siswa->save();

        return redirect()->route('siswa.index');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        //SELECT * FROM siswa WHERE 'id' = $id
        return view('siswa.edit', compact('siswa'));
    }

    public function update($id)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = request()->input('nama');
        $siswa->tanggal_lahir = request()->input('tanggal_lahir');
        $siswa->tempat_lahir = request()->input('tempat_lahir');
        $siswa->jenis_kelamin = request()->input('jenis_kelamin');
        $siswa->alamat = request()->input('alamat');
        $siswa->save();

        return redirect()->route('siswa.index');
    }
}
