<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memos')->insert([
            'content' => 'テスト1',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('memos')->insert([
            'content' => 'テスト2',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
        DB::table('memos')->insert([
            'content' => 'テスト3',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
