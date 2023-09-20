<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use lluminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class TabunganController extends Controller
{
    //
    public function index()
    {
        $tabungan = Tabungan::latest()->paginate(1);
        return view('tabungan.isi-saldo', compact('tabungan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabungan $tabungan)
    {
        return view('tabungan/inedit', compact('tabungan'));
    }

    public function update(Request $request, Tabungan $tabungan)
    {
        $request->validate([
            'tanggal' => 'required',
            'tabungan' => 'required'
        ]);

        $tabungan->update($request->all());

        return redirect()->route('saldos.index')
            ->with('success', 'pemasukan updated successfully');
    }
}
