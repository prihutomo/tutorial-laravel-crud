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
        return $this->form();
    }

    public function edit($id)
    {
        return $this->form($id);
    }

    public function show($id)
    {
        return $this->form($id);
    }

    public function form($id = null)
    {
        if($id){
            $siswa = Siswa::find($id);
            session()->flashInput(array_merge($siswa->toArray(), old()));
        }else{
            session()->flashInput(old());
        }

        return view('siswa.form');
    }

    public function store()
    {
        return $this->save();
    }

    public function update($id)
    {
        return $this->save($id);
    }


    public function save($id = null)
    {
        $input = [
            'nama' => request()->input('nama'),
            'tanggal_lahir' => request()->input('tanggal_lahir'),
            'tempat_lahir' => request()->input('tempat_lahir'),
            'jenis_kelamin' => request()->input('jenis_kelamin'),
            'alamat' => request()->input('alamat'),
        ];

        if($id) {
            Siswa::find($id)->update($input);
        }else{
            Siswa::create($input);
        }

        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if($siswa){
            $siswa->delete();
            return redirect()->route('siswa.index');
        }
    }
}
