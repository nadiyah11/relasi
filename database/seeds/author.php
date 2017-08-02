<?php

use Illuminate\Database\Seeder;

class author extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post=[
        ['name'=>'nadiyah'],
     
        ];

        DB::table('authors')->insert($post);
    }
}
