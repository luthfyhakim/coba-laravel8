<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Luthfy Hakim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis deserunt, tenetur amet fugiat cum pariatur omnis quo quisquam corporis, obcaecati ex, incidunt officia sit at? Ea necessitatibus nobis nostrum laboriosam. Libero, ipsam sint delectus repudiandae unde, obcaecati distinctio officia ut, nostrum quis eveniet cum odit reprehenderit recusandae. Nemo incidunt eos velit, reiciendis autem sequi sapiente consequatur deserunt doloremque. Ullam, quasi delectus natus ea exercitationem ratione eos distinctio reprehenderit tempora, sint qui ex fuga ipsam amet, quidem hic aperiam. Est, quia!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ecobag",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam consequatur dicta reprehenderit rerum impedit laudantium asperiores praesentium, at aut voluptates explicabo mollitia eaque dignissimos aspernatur non doloribus consequuntur excepturi quod reiciendis? Enim quam incidunt officia sit eos magnam, fuga et dolore maxime minima suscipit nobis sunt quae quasi sequi consequatur illum nam sint, delectus commodi non odit consequuntur dolores saepe? Magni sint rem nisi vero voluptates impedit consequuntur dolorum porro tempore modi pariatur maxime quod minus nesciunt aliquid officiis in, totam iusto sapiente a molestiae velit enim illo. Magni repudiandae iure suscipit excepturi eum, numquam beatae dolorem veritatis consectetur nostrum!"
        ]
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
