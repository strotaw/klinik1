<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hero.index', [
            'title' => 'Hero',
            'datas' => Hero::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *  @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('hero.create', [
            'title' => 'Hero',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
{
    if ($request->aktif == "on") {
        $aktif = 1;
        DB::table('hero')->where('aktif', 1)->update(['aktif' => 0]);
    } else {
        $aktif = 0;
    }

    // Validasi (opsional tapi disarankan)
    $request->validate([
        'judul1' => 'required',
        'judul2' => 'required',
        'judul3' => 'required',
        'url_img' => 'required|image',
    ]);

    // Ambil file
    $file = $request->file('url_img');

    // Buat nama file unik
    $filename = time() . '_' . $file->getClientOriginalName();

    // Tentukan path tujuan
    $destinationPath = public_path('storage/hero_img');

    // Pindahkan file ke public/storage/hero_img
    $file->move($destinationPath, $filename);

    // Simpan path relatif ke database
    $data = $request->only(['judul1', 'judul2', 'judul3']);
    $data['aktif'] = $aktif;
    $data['url_img'] = 'hero_img/' . $filename;

    Hero::create($data);

    return redirect()->route('hero.index')->with('simpan', 'Data Berhasil Ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
