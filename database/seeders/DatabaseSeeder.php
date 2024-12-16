<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\division;
use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// User::factory(10)->create();

		// User::factory()->create([
		//     'name' => 'Test User',
		//     'email' => 'test@example.com',
		// ]);

		$divisions = [
			'서비스개발본부',
			'기술개발연구소',
		];

		foreach ($divisions as $divisionName) {
			$division = division::create(['name' => $divisionName]);

			Department::factory(2)->create([
				'division_id' => $division->id,
			])->each(function ($department) {
				Team::factory(2)->create([
					'department_id' => $department->id,
				])->each(function ($team) {
					User::factory(random_int(2, 3))->create([
						'team_id' => $team->id,
					]);
				});
			});
		}
	}
}
