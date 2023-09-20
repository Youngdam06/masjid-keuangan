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
            ['tabungan' => '9000000'],
        ];

        foreach ($data as $value)
            Tabungan::insert([
                'tabungan' => $value['tabunganj'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
