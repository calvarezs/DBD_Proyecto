<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Article::create([ 
            'id'			=> 1,
            'article_name'  => 'Cloro',
            'description'   => 'Artículo de higiene personal',
            'amount'        => 5,
            'type_article_id'  => 2
        ]);

        Article::create([ 
            'id'            => 2,
            'article_name'  => 'Papel Higenico',
            'description'   => 'Artículo de higiene personal',
            'amount'        => 64,
            'type_article_id'  => 2
        ]);

        Article::create([ 
            'id'            => 3,
            'article_name'  => 'Arroz',
            'description'   => 'Alimento no perecible',
            'amount'        => 80,
            'type_article_id'  => 3
        ]);

        Article::create([ 
            'id'            => 4,
            'article_name'  => 'colchon',
            'description'   => 'articulo tipo X',
            'amount'        => 20,
            'type_article_id'  => 1
        ]);

        Article::create([ 
            'id'            => 5,
            'article_name'  => 'Ropa',
            'description'   => 'articulo tipo X',
            'amount'        => 46,
            'type_article_id'  => 1
        ]);
    
    }
}
