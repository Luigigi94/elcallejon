<?php

namespace Database\Seeders;

use App\Models\status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value_statuses = [
            [
                'id' => 1,
                'status' => 'Libre'
            ],
            [
                'id' => 2,
                'status' => 'Ocupada'
            ],
            [
                'id' => 3,
                'status' => 'pendiente'
            ],
            [
                'id' => 4,
                'status' => 'pagado'
            ]
        ];

        foreach ($value_statuses as $vs){
            Status::create($vs);
        }
    }
}
