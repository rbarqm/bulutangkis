<?php

use Illuminate\Database\Seeder;

class BrandSenarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand_senar')->insert([
			[
				'BRAND'		=>	'YONEX',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'LI-NING',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'KASON',
				'ACTIVE'	=>	'Y'
			],[
				'BRAND'		=>	'WILSON',
				'ACTIVE'	=>	'Y'
			],
		]);
    }
}
