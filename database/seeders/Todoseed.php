<?php

namespace Database\Seeders;
use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Todoseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'td_name'=>'ทำแนวขอสอบ',
            'td_des'=>'บลาๆ',
            'td_status'=> false
        ]);
    }
}
