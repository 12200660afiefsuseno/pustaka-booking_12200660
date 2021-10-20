<?php

namespace App\Database\Seeds;

use App\Models\Pengguna_12200660;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200660 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      =>'Afiefsuseno',
                'password'  =>md5('12200660')
            ],
            [
                'nama'      =>'admin',
                'password'  =>md5('12345')
            ],
            [
                'nama'      =>'12200660',
                'password'  =>md5('Afiefsuseno')  
            ]
            ];
            $p = new Pengguna_12200660();
            $p->insert($data);
    }
}
