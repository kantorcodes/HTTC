<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AttributesTableSeeder extends Seeder{


	public function run()
	{

		$attributes = [
			[
				'namespace' => 'platform/content',
				'slug'      => 'summary',
				'name'      => 'summary',
				'description' => 'summary',
				'type'       => 'textarea'
			],
			[
				'namespace' => 'platform/content',
				'slug'      => 'subtitle',
				'name'      => 'subtitle',
				'description' => 'subtitle',
				'type'       => 'input'
			],
			[
				'namespace' => 'platform/content',
				'slug'      => 'author',
				'name'      => 'author',
				'description' => 'author',
				'type'       => 'input'
			]
		];

		$now = Carbon::now();

		foreach($attributes as $attribute)
		{
			$attribute['created_at'] = $now;
			$attribute['updated_at'] = $now;
			$attribute['enabled']    = 1;
		}

		DB::table('attributes')->insert($attributes);

	}
}