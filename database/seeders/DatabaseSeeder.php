<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Yosep Bahtiar',
        //     'email' => 'yosep123tiar@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Dasha Taran',
        //     'email' => 'tarann@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consequatur ex nemo laborum aperiam rerum molestiae accusamus accusantium vel quae explicabo cupiditate culpa minus, aspernatur a blanditiis suscipit necessitatibus in sed quis fuga tempore.</p><p>Architecto, id. Perspiciatis qui asperiores quia. Distinctio modi impedit eveniet? Similique praesentium voluptates tempore quam aliquam cupiditate reiciendis, animi cum blanditiis corporis, beatae odio molestiae nihil sint aliquid maiores consectetur dicta officiis temporibus delectus, eaque qui aperiam?</p><p>In soluta maxime id sunt totam sapiente enim iure eveniet fuga repudiandae provident, reiciendis qui praesentium expedita beatae ipsam sequi veniam ullam labore quis distinctio accusantium omnis! Iusto quia magnam provident dolore quo! Rem repellat doloribus quos laboriosam nemo, iure consequatur ipsam excepturi facilis neque maiores eos aliquam accusantium placeat facere, nobis animi ratione porro? Similique perspiciatis odit sunt pariatur libero molestias dignissimos debitis corrupti ex minus quos, nobis esse at amet incidunt praesentium sit animi aut, repudiandae dolorum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum ke dua',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consequatur ex nemo laborum aperiam rerum molestiae accusamus accusantium vel quae explicabo cupiditate culpa minus, aspernatur a blanditiis suscipit necessitatibus in sed quis fuga tempore.</p><p>Architecto, id. Perspiciatis qui asperiores quia. Distinctio modi impedit eveniet? Similique praesentium voluptates tempore quam aliquam cupiditate reiciendis, animi cum blanditiis corporis, beatae odio molestiae nihil sint aliquid maiores consectetur dicta officiis temporibus delectus, eaque qui aperiam?</p><p>In soluta maxime id sunt totam sapiente enim iure eveniet fuga repudiandae provident, reiciendis qui praesentium expedita beatae ipsam sequi veniam ullam labore quis distinctio accusantium omnis! Iusto quia magnam provident dolore quo! Rem repellat doloribus quos laboriosam nemo, iure consequatur ipsam excepturi facilis neque maiores eos aliquam accusantium placeat facere, nobis animi ratione porro? Similique perspiciatis odit sunt pariatur libero molestias dignissimos debitis corrupti ex minus quos, nobis esse at amet incidunt praesentium sit animi aut, repudiandae dolorum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum ke tiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consequatur ex nemo laborum aperiam rerum molestiae accusamus accusantium vel quae explicabo cupiditate culpa minus, aspernatur a blanditiis suscipit necessitatibus in sed quis fuga tempore.</p><p>Architecto, id. Perspiciatis qui asperiores quia. Distinctio modi impedit eveniet? Similique praesentium voluptates tempore quam aliquam cupiditate reiciendis, animi cum blanditiis corporis, beatae odio molestiae nihil sint aliquid maiores consectetur dicta officiis temporibus delectus, eaque qui aperiam?</p><p>In soluta maxime id sunt totam sapiente enim iure eveniet fuga repudiandae provident, reiciendis qui praesentium expedita beatae ipsam sequi veniam ullam labore quis distinctio accusantium omnis! Iusto quia magnam provident dolore quo! Rem repellat doloribus quos laboriosam nemo, iure consequatur ipsam excepturi facilis neque maiores eos aliquam accusantium placeat facere, nobis animi ratione porro? Similique perspiciatis odit sunt pariatur libero molestias dignissimos debitis corrupti ex minus quos, nobis esse at amet incidunt praesentium sit animi aut, repudiandae dolorum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum ke empat',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consequatur ex nemo laborum aperiam rerum molestiae accusamus accusantium vel quae explicabo cupiditate culpa minus, aspernatur a blanditiis suscipit necessitatibus in sed quis fuga tempore.</p><p>Architecto, id. Perspiciatis qui asperiores quia. Distinctio modi impedit eveniet? Similique praesentium voluptates tempore quam aliquam cupiditate reiciendis, animi cum blanditiis corporis, beatae odio molestiae nihil sint aliquid maiores consectetur dicta officiis temporibus delectus, eaque qui aperiam?</p><p>In soluta maxime id sunt totam sapiente enim iure eveniet fuga repudiandae provident, reiciendis qui praesentium expedita beatae ipsam sequi veniam ullam labore quis distinctio accusantium omnis! Iusto quia magnam provident dolore quo! Rem repellat doloribus quos laboriosam nemo, iure consequatur ipsam excepturi facilis neque maiores eos aliquam accusantium placeat facere, nobis animi ratione porro? Similique perspiciatis odit sunt pariatur libero molestias dignissimos debitis corrupti ex minus quos, nobis esse at amet incidunt praesentium sit animi aut, repudiandae dolorum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
