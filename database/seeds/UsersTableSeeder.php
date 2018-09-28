<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        $users = $users->makeVisible(['password','remember_token'])->toArray();

        User::insert($users);

        $user = User::find(1);
        $user->name = '雨中歌者';
        $user->email = 'esinger@qq.com';
        $user->password = bcrypt('123456');
        $user->is_admin = true;
        $user->save();
    }
}
