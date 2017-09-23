<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'Demo User',
            'email' => 'demo@videa.tv',
            'password' => bcrypt('password1'),
        ]);
        User::create([
            'name' => 'Admin User',
            'email' => 'victor.tolbert@gmail.com',
            'password' => bcrypt('U9lift'),
        ]);
        User::create([
            'name' => 'Another Admin',
            'email' => 'vtolbert@vticonsulting.com',
            'password' => bcrypt('U9lift'),
        ]);
    }
}
