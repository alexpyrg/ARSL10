<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'Registrar',
            'description' => 'Basic user, basic permissions.',
        ]);

        DB::table('roles')->insert([
            'name' => 'Expert',
            'description' => 'Expert user access to all accidents and analytics.',
        ]);

        DB::table('roles')->insert([
            'name' => 'Administrator',
            'description' => 'Top user has all permissions, can add edit / remove anything at will.',
        ]);
    }
}
