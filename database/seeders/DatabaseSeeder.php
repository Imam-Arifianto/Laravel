<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Imam Arifianto',
            'username' => 'imamarifianto',
            'email' => 'imamarifianto18@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('456897')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        post::factory(20)->create();
        // post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum ',
        //     'body' => '<p> ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum repellendus commodi quibusdam neque possimus nesciunt.<p> Neque, laboriosam ipsum? Modi, doloribus expedita maiores ad animi sint fuga recusandae ex omnis velit sapiente molestias! Ea porro atque suscipit, necessitatibus soluta perferendis qui, culpa sunt non deleniti laborum.</p> Laboriosam accusamus dolore animi harum totam voluptatibus, impedit repellat, vero ducimus sequi esse at! Repellat in autem recusandae nemo harum voluptas non. Ut animi,<p> exercitationem sapiente est quasi perspiciatis recusandae suscipit aperiam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius iste voluptate in excepturi pariatur laboriosam impedit tempora aspernatur ad, temporibus qui tenetur minima inventore repudiandae </p>similique quos expedita quaerat, maxime vitae asperiores accusamus! A fugit nam at asperiores quod corporis corrupti voluptate! Et assumenda sint dolores fugiat vero tempore cum deleniti dolorum odit odio nemo, repellat perspiciatis magnam iste.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum ',
        //     'body' => '<p> ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum repellendus commodi quibusdam neque possimus nesciunt.<p> Neque, laboriosam ipsum? Modi, doloribus expedita maiores ad animi sint fuga recusandae ex omnis velit sapiente molestias! Ea porro atque suscipit, necessitatibus soluta perferendis qui, culpa sunt non deleniti laborum.</p> Laboriosam accusamus dolore animi harum totam voluptatibus, impedit repellat, vero ducimus sequi esse at! Repellat in autem recusandae nemo harum voluptas non. Ut animi,<p> exercitationem sapiente est quasi perspiciatis recusandae suscipit aperiam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius iste voluptate in excepturi pariatur laboriosam impedit tempora aspernatur ad, temporibus qui tenetur minima inventore repudiandae </p>similique quos expedita quaerat, maxime vitae asperiores accusamus! A fugit nam at asperiores quod corporis corrupti voluptate! Et assumenda sint dolores fugiat vero tempore cum deleniti dolorum odit odio nemo, repellat perspiciatis magnam iste.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum ',
        //     'body' => '<p> ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum repellendus commodi quibusdam neque possimus nesciunt.<p> Neque, laboriosam ipsum? Modi, doloribus expedita maiores ad animi sint fuga recusandae ex omnis velit sapiente molestias! Ea porro atque suscipit, necessitatibus soluta perferendis qui, culpa sunt non deleniti laborum.</p> Laboriosam accusamus dolore animi harum totam voluptatibus, impedit repellat, vero ducimus sequi esse at! Repellat in autem recusandae nemo harum voluptas non. Ut animi,<p> exercitationem sapiente est quasi perspiciatis recusandae suscipit aperiam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius iste voluptate in excepturi pariatur laboriosam impedit tempora aspernatur ad, temporibus qui tenetur minima inventore repudiandae </p>similique quos expedita quaerat, maxime vitae asperiores accusamus! A fugit nam at asperiores quod corporis corrupti voluptate! Et assumenda sint dolores fugiat vero tempore cum deleniti dolorum odit odio nemo, repellat perspiciatis magnam iste.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum ',
        //     'body' => '<p> ipsum dolor sit amet, consectetur adipisicing elit. Qui exercitationem temporibus nostrum repellendus commodi quibusdam neque possimus nesciunt.<p> Neque, laboriosam ipsum? Modi, doloribus expedita maiores ad animi sint fuga recusandae ex omnis velit sapiente molestias! Ea porro atque suscipit, necessitatibus soluta perferendis qui, culpa sunt non deleniti laborum.</p> Laboriosam accusamus dolore animi harum totam voluptatibus, impedit repellat, vero ducimus sequi esse at! Repellat in autem recusandae nemo harum voluptas non. Ut animi,<p> exercitationem sapiente est quasi perspiciatis recusandae suscipit aperiam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius iste voluptate in excepturi pariatur laboriosam impedit tempora aspernatur ad, temporibus qui tenetur minima inventore repudiandae </p>similique quos expedita quaerat, maxime vitae asperiores accusamus! A fugit nam at asperiores quod corporis corrupti voluptate! Et assumenda sint dolores fugiat vero tempore cum deleniti dolorum odit odio nemo, repellat perspiciatis magnam iste.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
