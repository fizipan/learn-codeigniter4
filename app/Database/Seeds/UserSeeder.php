<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'Hafizh MY',
                'password' => '$2a$12$TFvr1nqsvQaniw/64aKsuuN29RixuHRO3dzD.PsckVDUlNGYkM1Fe',
            ],
            [
                'username' => 'Athar Jr',
                'password' => '$2a$12$TFvr1nqsvQaniw/64aKsuuN29RixuHRO3dzD.PsckVDUlNGYkM1Fe',
            ],
            [
                'username' => 'Midun Van Jok',
                'password' => '$2a$12$TFvr1nqsvQaniw/64aKsuuN29RixuHRO3dzD.PsckVDUlNGYkM1Fe',
            ],
            [
                'username' => 'Haikal Matahari',
                'password' => '$2a$12$TFvr1nqsvQaniw/64aKsuuN29RixuHRO3dzD.PsckVDUlNGYkM1Fe',
            ],
            [
                'username' => 'Ibnu Siam',
                'password' => '$2a$12$TFvr1nqsvQaniw/64aKsuuN29RixuHRO3dzD.PsckVDUlNGYkM1Fe',
            ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
