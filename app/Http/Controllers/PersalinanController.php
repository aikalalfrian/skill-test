<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persalinan;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class PersalinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lahir = Persalinan::get();

        return view ('home',compact('lahir'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('persalinan.create');
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
            'tanggal_lahir' => 'required',
            'jam_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'nama_ibu' => 'required',
            'lahir_ibu' => 'string|nullable',
            'usia_gestasi' => 'required',
            'lama_persalinan' => 'required',
            'jenis_persalinan' => 'required',
            'catatan' => 'string|min:3|max:255|nullable',
        ]);
        Persalinan::create($request->all());

        return redirect()->route('home')->with('success','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lahir = Persalinan::findOrFail($id);

        return view('persalinan.show',compact('lahir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lahir = Persalinan::findOrFail($id);

        return view('persalinan.edit', compact('lahir'));
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
            'tanggal_lahir' => 'required',
            'jam_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'nama_ibu' => 'required',
            'lahir_ibu' => 'string|nullable',
            'usia_gestasi' => 'required',
            'lama_persalinan' => 'required',
            'jenis_persalinan' => 'required',
            'catatan' => 'string|min:3|max:255|nullable',
        ]);

        $lahir = Persalinan::find($id)->update($request->all());


        return redirect()->route('home')->with('succes','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lahir = Persalinan::findOrFail($id);

        $lahir->delete();

        return redirect()->route('home')->with('success','Siswa Berhasil di Hapus');
    }
}
