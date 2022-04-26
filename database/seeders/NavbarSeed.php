<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 
        [
            [
                'name'          =>        'Session',
                'route'         =>        'session.data',
                'index'         =>        1,
            ],
        ];

        foreach($data as $key => $value)
        {
            Navbar::create($value);
        }
    }
}
