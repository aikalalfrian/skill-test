<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Birth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class BirthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newborn = Birth::get();

        return view ('home',compact('newborn'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('birth.create');
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
            'date_of_birth' => 'required',
            'birth_time' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'length' => 'required',
            'mother_name' => 'required',
            'mother_birth' => 'string|nullable',
            'gestational_age' => 'required',
            'givebirth_duration' => 'required',
            'givebirth_type' => 'required',
            'notes' => 'string|min:3|max:255|nullable',
        ]);
        Birth::create($request->all());

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
        $newborn = Birth::findOrFail($id);

        return view('birth.show',compact('newborn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newborn = Birth::findOrFail($id);

        return view('birth.edit', compact('newborn'));
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
            'date_of_birth' => 'required',
            'birth_time' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'length' => 'required',
            'mother_name' => 'required',
            'mother_birth' => 'string|nullable',
            'gestational_age' => 'required',
            'givebirth_duration' => 'required',
            'givebirth_type' => 'required',
            'notes' => 'string|min:3|max:255|nullable',
        ]);

        $newborn = Birth::find($id)->update($request->all());


        return redirect()->route('home')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newborn = Birth::findOrFail($id);

        $newborn->delete();

        return redirect()->route('home')->with('success','Data Berhasil di Hapus');
    }
}
