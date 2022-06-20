<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gambar;

class HomeController extends Controller
{
    public function index() {
        $gambar = Gambar::all();

        return view ('member.home.index')
        ->with('gambar', $gambar);
    }
}
