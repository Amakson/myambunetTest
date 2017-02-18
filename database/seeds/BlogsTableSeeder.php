<?php

use Illuminate\Database\Seeder;

use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $blog_one = new Blog();
        $blog_one->title = 'Getting started with myambunet';
        $blog_one->slug = 'getting-started-with-myambunet';
        $blog_one->meta_title = 'Create an account on myambunet platform';
        $blog_one->meta_desc = 'Create an account on myambunet platform';
        $blog_one->body = 'Lets get started with the basics of creating an account on myambunet';
        $blog_one->save();

        $blog_two = new Blog();
        $blog_two->title = 'Create an account in Github';
        $blog_two->slug = 'create-an-account-with-github';
        $blog_two->meta_title = 'Create an account in Github';
        $blog_two->meta_desc = 'Connections for life';
        $blog_two->body = 'Where life savers connect';
        $blog_two->save();
    }
}
