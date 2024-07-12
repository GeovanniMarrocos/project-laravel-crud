<?php

namespace Database\Seeders;

use App\Models\{
    User
};

use Illuminate\Database\Console\Seeds\{
    WithoutModelEvents
};

use Illuminate\Database\{
    Seeder
};

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'Geovanni Matheus',
            'email' => 'geovanni.teste@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
