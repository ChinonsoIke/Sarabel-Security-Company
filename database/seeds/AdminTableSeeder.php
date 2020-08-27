<?php

use Illuminate\Database\Seeder;
use App\Administrator;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminOne = new Administrator();
        $adminOne->name = 'Admin Example';
        $adminOne->email = 'chinonsoikewelugo@gmail.com';
        $adminOne->password = bcrypt('admin123456');
        $adminOne->save();
    }
}
