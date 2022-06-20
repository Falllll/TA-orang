<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gambar;
use Illuminate\Support\Facades\File;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar = Gambar::latest()->get();

        return view ('admin.gambar.index')
            ->with('gambar', $gambar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.gambar.create');
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
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image'
        ]);

        $images = new Gambar();
        $images->title = $request->title;
        $images->content = $request->content;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('img/gambar'), $filename);
            $images['image']= $filename;
        }
        $images->save();


        // ubah format tanggal
        // $date =  date('y-m-d', strtotime($request->date));

        return redirect('admin/gambar')->with('status', 'News created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gambar = Gambar::findOrFail($id);

        // return view('admin.pengajuan-kegiatan.edit',compact('pengajuanKegiatan'));
        return view ('admin.gambar.edit', compact('gambar'));
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
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image'
        ]);

        $images = Gambar::findOrFail($id);
        $images->title = $request->title;
        $images->content = $request->content;
        if($request->file('image')){
            $image_path = public_path("/public/image/".$images->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/image'), $filename);
            $images['image']= $filename;
        } else{
            unset($images['image']);
        }
        $images->update();


        // ubah format tanggal
        // $date =  date('y-m-d', strtotime($request->date));

        return redirect('admin/gambar')->with('status', 'News created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gambar::where('id', $id)->delete();

        return redirect()->route('admin.gambar.index');
    }
}
