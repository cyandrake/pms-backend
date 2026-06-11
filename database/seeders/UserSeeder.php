<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::insert([
            ['first_name'=>'John','last_name'=>'Doe','email_address'=>'john@example.com','mobile_number'=>'09170000001','address'=>'Manila','status'=>true,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Jane','last_name'=>'Smith','email_address'=>'jane@example.com','mobile_number'=>'09170000002','address'=>'Quezon City','status'=>true,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Mark','last_name'=>'Lee','email_address'=>'mark@example.com','mobile_number'=>'09170000003','address'=>'Caloocan','status'=>true,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Anna','last_name'=>'Cruz','email_address'=>'anna@example.com','mobile_number'=>'09170000004','address'=>'Pasig','status'=>true,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Peter','last_name'=>'Lopez','email_address'=>'peter@example.com','mobile_number'=>'09170000005','address'=>'Taguig','status'=>false,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Sarah','last_name'=>'Reyes','email_address'=>'sarah@example.com','mobile_number'=>'09170000006','address'=>'Makati','status'=>true,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'James','last_name'=>'Tan','email_address'=>'james@example.com','mobile_number'=>'09170000007','address'=>'Manila','status'=>true,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Lisa','last_name'=>'Garcia','email_address'=>'lisa@example.com','mobile_number'=>'09170000008','address'=>'Cavite','status'=>false,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Kevin','last_name'=>'Yap','email_address'=>'kevin@example.com','mobile_number'=>'09170000009','address'=>'Laguna','status'=>true,'created_at' => now(),'updated_at' => now()],
            ['first_name'=>'Nina','last_name'=>'Santos','email_address'=>'nina@example.com','mobile_number'=>'09170000010','address'=>'Bulacan','status'=>true,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
