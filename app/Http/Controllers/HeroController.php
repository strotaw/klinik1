<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        return view('hero.edit', [
            'title' => 'Hero',
            'data' => Hero::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->aktif == "on") {
            $aktif = 1;
            DB::table('hero')->where('aktif', 1)->update([
                'aktif' => '0'
            ]);
        } else {
            $aktif = 0;
        }

        $data = Hero::find($id);
        $data->judul1 = $request->judul1;
        $judul1_lama = DB::table('hero')
        ->where('id','=', $id)
        ->value('judul1');
        $data->judul2 = $request->judul2;
        $data->judul3 = $request->judul3;
        $data->aktif = $aktif;
        $url_img_lama = DB::table('hero')
        ->where('id','=', $id)
        ->value('url_img');
        if ($request->file('url_img') !== null) {
            // Ambil file baru
            $file = $request->file('url_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('storage/hero_img');
            $file->move($destinationPath, $filename);
            // Simpan path relatif ke database
            $data['url_img'] = 'hero_img/' . $filename;
            // Hapus file lama jika ada
            if ($url_img_lama && file_exists(public_path('storage/' . $url_img_lama))) {
                unlink(public_path('storage/' . $url_img_lama));
            }
        }

        $data->save();
        return redirect()->route('hero.index')->with('update', 'Data Berhasil Diubah'
        .  $judul1_lama .
        ' has been updated ');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
