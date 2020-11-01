<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'shota',
            'mail' => 'hirakawa@hirakawa.jp',
            'age' => 35,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'name' => 'kazuya',
            'mail' => 'kazuya@okimori.jp',
            'age' => 25,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'name' => 'takahiro',
            'mail' => 'takahiro@matsumoto.jp',
            'age' => 34,
        ];
        DB::table('articles')->insert($param);

    }
}
