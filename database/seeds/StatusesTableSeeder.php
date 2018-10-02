<?php

use Illuminate\Database\Seeder;

use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = [1,2,3];
        $statuses = factory(Status::class)->times(100)->make()->each(function ($status) use ($userIds){
            $status->user_id = array_random($userIds);
        });

        Status::insert($statuses->toArray());
    }
}
