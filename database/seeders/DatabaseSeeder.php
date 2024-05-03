<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    protected $permissions = [
        "login",
        "logout",
        "barang",
        "pembelian",
        "pemakaian",
        "generate-laporan"
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach ($this->permissions as $permission) {
            Permission::create([
                "name" => $permission
            ]);
        }

        $userAdmin = User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin")
        ]);
        $userOperator = User::create([
            "name" => "Operator",
            "email" => "operator@gmail.com",
            "password" => Hash::make("operator")
        ]);
        $userPetugas = User::create([
            "name" => "Petugas",
            "email" => "petugas@gmail.com",
            "password" => Hash::make("petugas")
        ]);

        $roleAdmin = Role::create([
            "name" => "administrator"
        ]);
        $roleOp = Role::create([
            "name" => "operator"
        ]);
        $rolePetugas = Role::create([
            "name" => "petugas"
        ]);

        $roleAdmin->syncPermissions([
            "login",
            "logout",
            "barang",
            "pembelian",
            "pemakaian",
            "generate-laporan"
        ]);
        $roleOp->syncPermissions([
            "login",
            "logout",
            "barang",
            "pembelian",
            "pemakaian"
        ]);
        $rolePetugas->syncPermissions([
            "login",
            "logout",
            "pembelian"
        ]);

        $userAdmin->assignRole($roleAdmin->id);
        $userOperator->assignRole($roleOp->id);
        $userPetugas->assignRole($rolePetugas->id);
    }
}
