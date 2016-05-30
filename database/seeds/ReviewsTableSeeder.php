<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'internship_user_id' => 1,
            'status_id' => 5,
            'review' => 'This is a public review bla bla bla',
            'rating' => 7.6
        ]);
        Review::create([
            'internship_user_id' => 1,
            'status_id' => 5,
            'review' => 'This is a private review bla bla bla bad stuffs bla bla',
            'rating' => 7.6
        ]);
    }
}
