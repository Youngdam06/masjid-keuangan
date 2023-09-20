<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Routing\Controller;

class DasboardController extends Controller
{
    public function index()
    {
        $tanggal = date('d-m-Y');
        $pemasukans = Pemasukan::latest()->paginate(15);
        $pengeluarans = Pengeluaran::latest()->paginate(15);
        return view('cetak-total', compact('pemasukans', 'pengeluarans'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }
}
