<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\videos;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = videos::latest()->get();

        return view ('admin.video.index')
            ->with('video', $video);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $video = new videos();
        $video->title = $request->title;
        $video->content = $request->content;
        if($request->file('video')){
            $file= $request->file('video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/image'), $filename);
            $video['video']= $filename;
        }
        $video->save();

        return redirect('admin/video')->with('status', 'News created!');
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
        $video = videos::findOrFail($id);

        return view ('admin.video.edit', compact('video'));

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
            'video' => 'video'
        ]);

        $video = videos::findOrFail($id);
        $video->title = $request->title;
        $video->content = $request->content;
        if($request->file('video')){
            $video_path = public_path("/public/image/".$video->video);
            if (File::exists($video_path)) {
                File::delete($video_path);
            }
            $file= $request->file('video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/image'), $filename);
            $video['video']= $filename;
        } else{
            unset($video['video']);
        }
        $video->update();

        return redirect('admin/video')->with('status', 'News created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        videos::where('id', $id)->delete();

        return redirect()->route('admin.video.index');
    }
}
