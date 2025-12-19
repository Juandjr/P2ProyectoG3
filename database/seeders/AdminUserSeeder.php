<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'pamelanicole1311@gmail.com'],
            [
                'name' => 'Pamela Nicole',
                'email_verified_at' => now(),
                'password' => Hash::make('admin1234'), // Cambia la contraseña si lo deseas
            ]
        );
    }
}
