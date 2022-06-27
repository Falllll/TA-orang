<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisLaporan;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = JenisLaporan::all();

        return view('member.pengaduan.create')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //script validasi
        $rules = [
            'isi' => 'required',
            'jenis_pengaduan_id' => 'required',
        ];

        $messages = [
            'isi.required' => 'Nama harus diisi',
            'jenis_pengaduan_id.required' => 'Jenis Pengaduan harus diisi',
        ];

        $this->validate($request, $rules, $messages);

        // simpan
        $category = new Pengaduan;
        $category->jenis_pengaduan_id = $request->jenis_pengaduan_id;
        $category->isi = $request->isi;
        // dd($category);
        $category->save();

        return redirect('member/pengaduan')->with('status', 'Category created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
