<?php

namespace App\Models;

use App\Models\Pemasukan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengeluaran extends Model
{
  use HasFactory;
  protected $table = "pengeluarans";
  protected $primarykey = "id";
  protected $fillable = [
    'keterangan',
    'tanggal',
    //   'pemasukans_id', 
    'nominal',
  ];


  public function pemasukan()
  {
    return $this->belongsToMany(Pemasukan::class, 'saldo', 'pengeluaran_id', 'pemasukan_id');
  }
}
