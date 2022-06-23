<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gambar;
use App\Models\videos;

class HomeController extends Controller
{
    public function index() {
        $gambar = Gambar::all();
        $video  = videos::all();

        return view ('member.home.index',compact(['gambar', 'video']));
        // ->with('gambar', $gambar, 'video', $video);
    }
}
