<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Posts Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Yosep Bahtiar',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quo soluta quidem harum numquam, odio repudiandae. Sit officia perspiciatis, quis consequatur dolore nisi explicabo quo aliquam in fuga velit itaque, nihil omnis voluptatem quibusdam aspernatur corporis eius, id qui minus enim laborum deleniti. Unde vitae possimus autem in consequatur recusandae eius totam accusantium facere incidunt, consectetur iusto distinctio amet deleniti molestias cum itaque? Doloremque quam fugiat quas esse rerum totam eius et quos id ea qui, molestias minus cumque sint!',
        ],
        [
            'title' => 'Judul Posts Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Dasha Taran',
            'body' =>
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit corrupti dignissimos expedita mollitia? Magnam ab ratione ipsum, necessitatibus officia impedit doloribus. Corporis quibusdam voluptas sapiente itaque eius error cum at aut natus odit perferendis labore quia distinctio quasi ullam, pariatur, dolores architecto quo sint inventore commodi reiciendis deserunt excepturi alias! Enim exercitationem officiis vero adipisci non molestiae veniam hic recusandae. Quas, aut minus praesentium dolores dolor molestiae quasi neque rerum voluptatem consectetur ipsum sit saepe iure perspiciatis voluptates, totam possimus porro aperiam atque, ducimus ipsam? Dolore unde quis officiis sed, vero numquam nisi totam esse, impedit consectetur ipsam praesentium? Velit porro quod cumque nulla numquam placeat! Rerum quas deleniti dicta earum iure ducimus beatae qui labore delectus id accusantium nisi commodi mollitia tempore molestias, voluptas aperiam harum, magnam similique aliquid nobis repellat eos maxime! Illum, quas modi repudiandae perferendis totam tempora vero blanditiis voluptas doloribus iste distinctio inventore voluptate a, nostrum vitae nisi? Dolorem autem ad nobis, iste recusandae provident unde quisquam libero suscipit? Itaque officia expedita cupiditate suscipit temporibus commodi provident, fugit necessitatibus placeat non. Dolor quibusdam aspernatur magnam. Accusamus quae incidunt voluptatum maiores voluptates, aperiam sint culpa amet aut libero ex inventore illo voluptas repellendus nam corrupti unde possimus, quaerat blanditiis. Et numquam aut illo nihil quis doloribus tenetur, dolores quae nesciunt pariatur, dignissimos tempora. Ipsam nisi obcaecati animi pariatur placeat iste, exercitationem cum minima blanditiis harum et dolorem? Alias nemo neque laudantium itaque, ipsam numquam! Expedita doloribus, aliquid minus iure natus sequi amet quasi sed quos atque.',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
