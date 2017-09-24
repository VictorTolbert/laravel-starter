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
            'name' => 'Seller User',
            'email' => 'seller@videa.tv',
            'password' => bcrypt('password1'),
        ]);

        User::create([
            'name' => 'Buyer User',
            'email' => 'buyer@videa.tv',
            'password' => bcrypt('password1'),
        ]);

        User::create([
            'name' => 'Rep User',
            'email' => 'rep@videa.tv',
            'password' => bcrypt('password1'),
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@videa.tv',
            'password' => bcrypt('password1'),
        ]);

        User::create([
            'name' => 'Victor Tolbert',
            'email' => 'victor.tolbert@gmail.com',
            'password' => bcrypt('U9lift'),
        ]);

        User::create([
            'name' => 'Victor',
            'email' => 'victor.tolbert@videa.tv',
            'password' => bcrypt('U9lift'),
        ]);

        User::create([
            'name' => 'Vic Tolbert',
            'email' => 'vtolbert@vticonsulting.com',
            'password' => bcrypt('U9lift'),
        ]);

        User::create([
            'name' => 'V Tolbert',
            'email' => 'vtolbert@yahoo.com',
            'password' => bcrypt('U9lift'),
        ]);

        User::create([
            'name' => 'Me',
            'email' => 'vtolbert@me.com',
            'password' => bcrypt('U9lift'),
        ]);

        User::create([
            'name' => 'VD Tolbert',
            'email' => 'victor.tolbert@outlook.com',
            'password' => bcrypt('U9lift'),
        ]);

        User::create([
            'name' => 'Vick Nice',
            'email' => 'vicknice@gmail.com',
            'password' => bcrypt('U9lift'),
        ]);
    }
}
