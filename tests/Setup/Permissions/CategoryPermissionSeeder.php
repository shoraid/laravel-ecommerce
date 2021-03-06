<?php

namespace Tests\Setup\Permissions;

use App\Enums\PermissionEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPermissionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$permissions = [
			PermissionEnum::GET_ALL_CATEGORIES,
			PermissionEnum::GET_SELECTED_CATEGORY,
			PermissionEnum::ADD_CATEGORY,
			PermissionEnum::UPDATE_CATEGORY,
			PermissionEnum::DELETE_CATEGORY,
		];

		$data = [];

		$count = count($permissions);

		for ($i = 0; $i < $count; $i++) {
			$data[] = [
				'name' => $permissions[$i],
				'guard_name' => 'web',
			];
		}

		DB::table('permissions')->insert($data);
	}
}
