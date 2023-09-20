<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Tabungan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TabunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['tabungan' => '30000000', 'tanggal' => ('2023-03-02')],
        ];

        foreach ($data as $value)
            Tabungan::insert([
                'tabungan' => $value['tabungan'],
                'tanggal' => $value['tanggal'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}