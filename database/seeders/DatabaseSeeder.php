<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\Customer;
use App\Models\Support\Category;
use App\Models\Support\Priority;
use App\Models\Support\Status;
use App\Models\Support\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'email'=>'merosoft@support.com',
            'password'=>bcrypt('merosoft123'),
            'name'=>'Demo User',
            'branch_id'=>1
        ]);
        Customer::factory(10)->create();
        Category::firstOrCreate([
            'name' => 'Maintenance',
        ]);
        Category::firstOrCreate([
            'name' => 'Finance',
        ]);
        Priority::firstOrCreate([
            'name' => 'Normal',
        ]);
        Priority::firstOrCreate([
            'name' => 'High',
        ]);
        Priority::firstOrCreate([
            'name' => 'Urgent',
        ]);
        Priority::firstOrCreate([
            'name' => 'Low',
        ]);
        Category::firstOrCreate([
            'name' => 'Installation',
        ]);
        Status::firstOrCreate([
            'id'=>1,
            'name' => 'New',
        ]);
        Status::firstOrCreate([
            'id'=>2,
            'name' => 'Open',
        ]);
        Status::firstOrCreate([
            'id'=>3,
            'name' => 'Completed',
        ]);
        Status::firstOrCreate([
            'id'=>4,
            'name' => 'Failed',
        ]);
        Status::firstOrCreate([
            'id'=>5,
            'name' => 'To Do Later',
        ]);
        Branch::firstOrCreate([
            'name' => "Demo Branch",
            'id' => 1
        ]);
        Ticket::firstOrCreate([
            'subject'=>"DEMO TICKET",
            'description'=>"DEMO TICKET DESCRIPTION HERE",
            'status_id'=>1,
            'branch_id'=>1,
            'created_by'=>1,
            'category_id'=>1,

        ]);
    }
}
