<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder {
	public function run()
	{
		$faker = Faker::create();
		for ($i=0; $i <= 10 ; $i++) {
			$post = new App\Post;
			$post->title = $faker->sentence;
			$post->content = $faker->paragraph;
			$post->published = rand(0,1);
			$post->viewed_at = Carbon\Carbon::now()
								->addDays(rand(1,5))
								->addHours(rand(0,18));
			$post->save();
		}
	}
}