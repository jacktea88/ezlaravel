<?php

// namespace Database\Seeders\web111a\laravel\ezlaravel\database\seeders;
namespace Database\Seeders;

use Faker\Factory;
use App\Models\Job;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::truncate();//清空表格及欄位
        $faker = Factory::create('zh_TW');
        if(false){   //可選擇是否用factory產生假資料
            for ($i=0; $i < 10; $i++) {

                Job::create([
                    'title' => $faker->name,
                    'created_at' => '2020-11-03 11:30:28',
                    'updated_at' => '2020-11-03 11:30:28'
                ]);
            };
        } else {
            Job::factory()->times(50)->create();
        }



    }
}
