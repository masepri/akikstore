<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('ProductsTableSeeder');
        $this->call('MembershipTypesTableSeeder');
        $this->call('CustomersTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('QuotesTableSeeder');
        Model::reguard();
    }
}
