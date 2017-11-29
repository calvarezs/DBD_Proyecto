<?php

use Illuminate\Database\Seeder;
use App\Type_article;

class TypeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Type_article::create([ 
         	'id'            => 1,
            'category_name'		=>'Artículo de higiene personal', 
			'description'		=>'akjaldjfaj',
			'collection_center_id'=>1
        ]);

        Type_article::create([ 
            'id'            => 2,
            'category_name'		=>'Alimento no perecible', 
			'description'		=>'akjaldjfaj',
			'collection_center_id'=>2
        ]);

        Type_article::create([ 
            'id'            => 3,
            'category_name'		=>'Alimento no perecible', 
			'description'		=>'akjaldjfaj',
			'collection_center_id'=>3
        ]);

        Type_article::create([ 
            'id'            => 4,
            'category_name'		=>'Artículo de higiene personal', 
			'description'		=>'akjaldjfaj',
			'collection_center_id'=>4
        ]);

        Type_article::create([ 
            'id'            => 5,
            'category_name'		=>'Artículo de higiene personal', 
			'description'		=>'akjaldjfaj',
			'collection_center_id'=>5
        ]);
    }
}
