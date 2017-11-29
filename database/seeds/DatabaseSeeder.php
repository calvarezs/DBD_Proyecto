<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Rol;
use App\Commune;
use App\Province;
use App\Region;
use App\Catastrophe;
use App\TypeCatastrophe;
use App\Collection_center;
use App\Measure;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
    	/**
		Region::unguard();
		$this->call(RegionSeeder::class);
		Region::reguard();
		
		Province::unguard();
		$this->call(ProvinceSeeder::class);
		Province::reguard();
		
		Commune::unguard(); 
		$this->call(CommuneSeeder::class); 
		Commune::reguard(); 

 */		

		


		Rol::unguard();
		$this->call(RolesSeeder::class);
		Rol::reguard();
		
		User::unguard();
		$this->call(UserSeeder::class);
		User::reguard();

		Region::unguard();
		$this->call(RegionSeeder::class);
		Region::reguard();
		
		Province::unguard();
		$this->call(ProvinceSeeder::class);
		Province::reguard();


		Commune::unguard();
		$this->call(CommuneSeeder::class);
		commune::reguard();

		
		

		Catastrophe::unguard(); 
		$this->call(CatastropheSeeder::class); 
		Catastrophe::reguard(); 

		TypeCatastrophe::unguard(); 
		$this->call(TypeCatastropheSeeder::class); 
		TypeCatastrophe::reguard(); 

		Measure::unguard();
		$this->call(MeasureSeeder::class);
		Measure::reguard();

		Collection_center::unguard();
		$this->call(Collection_CenterSeeder::class);
		Collection_center::reguard();

		Collection_Center::unguard();
		$this->call(TypeArticleSeeder::class);
		Collection_Center::reguard();

		Collection_Center::unguard();
		$this->call(ArticleSeeder::class);
		Collection_Center::reguard();
		
	}
}