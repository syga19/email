<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class clientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bp1 = new \App\Models\Clients();
        $bp1->name = "Agne";
        $bp1->surname = "Kuzmicke";
        $bp1->email = "sds@gmail.com";
        $bp1->save();

        $bp2 = new \App\Models\Clients();
        $bp2->name = "Jonas";
        $bp2->surname = "Jonaitis";
        $bp2->email = "jonas@gmail.com";
        $bp2->save();

    }
}
