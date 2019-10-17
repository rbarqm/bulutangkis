<?php

use Illuminate\Database\Seeder;

class BrandRaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand_raket')->insert([
			[
				'BRAND'		=>	'YONEX',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'LI-NING',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'ADIDAS',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'WILSON',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'HART',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'KARAKAL',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'YEHLEX',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'MONSOON',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'PRO ACE',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'CARLTON',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'VICTOR',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'ASTEC',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'ASHAWAY',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'FORZA',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'FLEET',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'GOSEN',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'TOALSON',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'BABOLAT',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'APACS',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'WISH',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'MORRIS',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'PROKENNEX',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'AINEX',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'KAYAKU',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'EURO',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'SPECS',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'BONIS',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'FLEX POWER',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'REINFORCE SPEED',
				'ACTIVE'	=>	'Y'
			]			
		]);
    }
}
