<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // Menambahkan middleware 'auth' pada konstruktor
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Metode untuk menampilkan halaman dashboard
    public function index()
    {
        return view('app.dashboard');
    }
}
