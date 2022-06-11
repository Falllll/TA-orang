<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisLaporan;

class JenisLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = JenisLaporan::latest()
        ->paginate(5)
        ->withQueryString();

    return view ('admin.laporan.kategori.index')
        ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.laporan.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:25',
        ];

        $messages = [
            'name.required' => 'Kategori harus diisi',
            'name.max' => 'Kategori terlalu panjang',
        ];

        $this->validate($request, $rules, $messages);

        // simpan
        $category = new JenisLaporan;
        $category->name = $request->name;
        $category->save();

        return redirect('admin/jenis-pelanggaran')->with('status', 'Category created!');
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
        $categories = JenisLaporan::findOrFail($id);
        return view('admin.laporan.kategori.edit')
            ->with('categories', $categories);
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
        $rules = [
            'name' => 'required|max:25',
        ];

        $messages = [
            'name.required' => 'Kategori harus diisi',
            'name.max' => 'Kategori terlalu panjang',
        ];

        $this->validate($request, $rules, $messages);

        // update
        $category = JenisLaporan::find($id);
        $category->name = $request->name;
        $category->save();


        return redirect('admin/jenis-pelanggaran')->with('status', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisLaporan::find($id)->delete();
        return back()->with('status', 'Category deleted!');
    }
}
