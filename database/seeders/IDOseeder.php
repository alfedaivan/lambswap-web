<?php

namespace Database\Seeders;

use App\Models\Ido;
use Illuminate\Database\Seeder;

class IDOseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idoData = [
            [
                'name' => 'IDO 1',
                'price' => 100000,
                'amount' => 100,
                'soft_cap' => 50,
                'hard_cap' => 100,
                'status' => 'Open'
            ],
            [
                'name' => 'IDO 2',
                'price' => 100000,
                'amount' => 100,
                'soft_cap' => 50,
                'hard_cap' => 100,
                'status' => 'On Going'
            ],
            [
                'name' => 'IDO 3',
                'price' => 100000,
                'amount' => 100,
                'soft_cap' => 50,
                'hard_cap' => 100,
                'status' => 'Closed'
            ]
        ];

        foreach ($idoData as $key => $val) {
            Ido::create($val);
        }
    }
}
