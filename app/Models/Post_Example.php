<?php

class PostExample
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus atque ipsa quo laudantium dignissimos, inventore dicta exercitationem consequuntur molestiae quidem praesentium tenetur repellat est! Cupiditate natus mollitia ipsa accusamus magnam. ",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia architecto fuga autem placeat sapiente ipsam quam voluptate, repudiandae repellat assumenda quas quae aliquid sed voluptatibus dolor eum soluta, vel ex culpa possimus tempore ad, dignissimos facilis! Ipsam nihil atque velit soluta molestiae culpa eum aspernatur error voluptas architecto.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $new_post = [];
        // foreach($posts as $post) {
        //     if ($post["slug"] == $slug) {
        //         $new_post = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
