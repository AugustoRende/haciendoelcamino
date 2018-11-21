<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Just a Standard Format Post.',
            'src' => 'images/thumbs/masonry/lamp-400.jpg',
            'date' => 'December 15, 2017',
            'description' => 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...',
            'category_id' => '1',
            'post_type_id' => '3',
        ]);

        Post::create([
            'title' => 'Dieter Rams',
            'src' => '',
            'date' => '',
            'description' => 'Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.',
            'category_id' => '1',
            'post_type_id' => '1',
        ]);

        Post::create([
            'title' => '10 Interesting Facts About Caffeine.',
            'src' => 'images/thumbs/masonry/tulips-400.jpg',
            'date' => 'December 15, 2017',
            'description' => 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...',
            'category_id' => '1',
            'post_type_id' => '3',
        ]);

        Post::create([
            'title' => 'No Sugar Oatmeal Cookies.',
            'src' => 'images/thumbs/masonry/cookies-400.jpg',
            'date' => 'December 10, 2017',
            'description' => 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...',
            'category_id' => '3',
            'post_type_id' => '3',
        ]);

        Post::create([
            'title' => 'Key Benefits Of Family Photography.',
            'src' => 'images/thumbs/masonry/shutterbug-400.jpg',
            'date' => 'December 10, 2017',
            'description' => 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...',
            'category_id' => '2',
            'post_type_id' => '4',
        ]);

        Post::create([
            'title' => 'Workspace Design Trends and Ideas.',
            'src' => 'images/thumbs/masonry/gallery/gallery-1-400.jpg;images/thumbs/masonry/gallery/gallery-2-400.jpg;images/thumbs/masonry/gallery/gallery-3-400.jpg',
            'date' => 'December 10, 2017',
            'description' => 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...',
            'category_id' => '2',
            'post_type_id' => '2',
        ]);

    }
}
