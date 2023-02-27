<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermision extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //buatkan seeder menggunakan spatie
        $user = User::create([
            'name' => 'Jurusan Kimia',
            'email' => 'kajur@kimia@mail.com',
            'password' => bcrypt('kajur'),
        ]);

        $roles = ['admin lab','admin berkas', 'mahasiswa', 'dosen','pkl','kompre','ta', 'jurusan'];
        foreach ($roles as $role) {
            $role = Role::create([
                'name' => $role,
                'guard_name' => 'web'
            ]);
        }
        $user->assignRole('jurusan');
    }
}
