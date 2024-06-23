<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function index()
    {
        $pasiens = Pasien::orderBy('nama')->paginate(10);
        return view('index', ['pasiens' => $pasiens]);
    }

    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'nama_wali' => 'required',
            'alamat_pasien' => 'required',
        ]);

        Pasien::create($validateData);
        return redirect('/pasien');
    }

    public function edit(Pasien $pasien)
    {
        return view('edit', compact('pasien'));
    }
    
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'nama_wali' => 'required',
            'alamat_pasien' => 'required',
        ]);

        $pasien = Pasien::find($id);
        $pasien->update($validateData);
        return redirect('/pasien');
    }

    public function delete($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}
