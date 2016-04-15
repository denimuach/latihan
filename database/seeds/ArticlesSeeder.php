<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
          [
            "title" => "Data 1",
            "content" => "1. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 2",
            "content" => "2. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 3",
            "content" => "3. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 4",
            "content" => "4. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 5",
            "content" => "5. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 6",
            "content" => "6. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 7",
            "content" => "7. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 8",
            "content" => "8. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 9",
            "content" => "9. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ],
          [
            "title" => "Data 10",
            "content" => "10. Lorem ipsum dolor sit amet, consectetur adipisicing elit"
          ]
        ];
        
        DB::table('articles')->insert($articles);
    }
}
