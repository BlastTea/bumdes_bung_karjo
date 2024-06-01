<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.home', [
            'title' => 'Bumdes | Homepage',
        ]);
    }
}
