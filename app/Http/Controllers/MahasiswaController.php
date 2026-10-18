<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ["nama" => "Andi", "ipk" => 3.6],
            ["nama" => "Budi", "ipk" => 3.8],
            ["nama" => "Citra", "ipk" => 3.9],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
