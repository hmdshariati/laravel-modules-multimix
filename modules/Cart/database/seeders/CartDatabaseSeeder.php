<?php

namespace Modules\Cart\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CartDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
