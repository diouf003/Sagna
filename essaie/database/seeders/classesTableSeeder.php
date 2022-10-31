<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class classesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes")->insert([
            ["libelle" =>"l1 info"],
            ["libelle" => "L2 info"],
            ["libelle" => "L3 info"],
            ["libelle" => "L1 log"],
            ["libelle" => "L2 log"],
            ["libelle" => "L2 log"],
            ["libelle" => "L1 gest"],
            ["libelle" => "L2 gest"],
            ["libelle" => "L3 gest"],
        ]);
    }
}
