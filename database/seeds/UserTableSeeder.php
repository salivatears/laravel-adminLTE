<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::statement("TRUNCATE TABLE users");

		$users = [
		[
			'name' => 'Stockr',
			'email' => 'admin@stockr.com',
			'password' => '$2y$10$7vXk5zRVMKiQ35rT5Zd/t.NjPwf6BqwMrnVbNhg.O0JovBcUCaBGG',
		]
		];

		User::insert($users);
	}

}
