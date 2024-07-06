<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     "waitress",
        //     "manager",
        //     "chef",
        //     "cashier"
        // ];

        // foreach ($data as $key) {
        //     Role::insert([
        //         "nama" => $key,
        //         "created_at" => now(),
        //         "updated_at" => now()
        //     ]);
        // }
    }
}
